/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Views.Base.BubblechartView
 * @alias SUGAR.App.view.views.BaseBubblechartView
 * @extends View.View
 */
({
    plugins: ['Dashlet', 'Tooltip', 'Chart'],

    tooltiptemplate: null,
    params: null,

    /**
     * Track if current user is manager.
     */
    isManager: false,

    /**
     * What module are we forecasting by
     */
    forecastBy: null,

    /**
     * Which field holds the likely case value
     */
    likelyField: null,

    /**
     * @inheritDoc
     */
    initialize: function(options) {
        this.isManager = app.user.get('is_manager');
        this._initPlugins();
        this._super('initialize', [options]);

        this.forecastBy = app.metadata.getModule('Forecasts', 'config').forecast_by || 'Opportunities';

        var fields = [
            'id',
            'name',
            'account_name',
            'base_rate',
            'currency_id',
            'assigned_user_name',
            'date_closed',
            'probability',
            'account_id',
            'sales_stage',
            'commit_stage'
        ];

        var orderBy = '';
        if (this.forecastBy === 'Opportunities') {
            fields.push('amount');
            orderBy = 'amount:desc';
            this.likelyField = 'amount';
        } else {
            fields.push('likely_case');
            orderBy = 'likely_case:desc';
            this.likelyField = 'likely_case';
        }

        this.params = {
            'fields': fields.join(','),
            'max_num': 10,
            'order_by': orderBy
        };

        this.tooltiptemplate = app.template.getView(this.name + '.tooltiptemplate');
    },

    /**
     * @inheritDoc
     */
    initDashlet: function(view) {
        var self = this;

        this.setDateRange();

        if (!this.isManager && this.meta.config) {
            // FIXME: Dashlet's config page is loaded from meta.panels directly.
            // See the "dashletconfiguration-edit.hbs" file.
            this.meta.panels = _.chain(this.meta.panels).filter(function(panel) {
                panel.fields = _.without(panel.fields, _.findWhere(panel.fields, {name: 'visibility'}));
                return panel;
            }).value();
        }

        this.chart = nv.models.bubbleChart()
            .x(function(d) {
                return d3.time.format('%Y-%m-%d').parse(d.x);
            })
            .y(function(d) {
                return d.y;
            })
            .margin({top: 0})
            .tooltipContent(function(key, x, y, e, graph) {
                e.point.close_date = d3.time.format('%x')(d3.time.format('%Y-%m-%d').parse(e.point.x));
                e.point.amount = e.point.currency_symbol + d3.format(',.2d')(e.point.base_amount);
                return self.tooltiptemplate(e.point).replace(/(\r\n|\n|\r)/gm, '');
            })
            .showTitle(false)
            .tooltips(true)
            .showLegend(true)
            .bubbleClick(function(e) {
                self.chart.dispatch.tooltipHide(e);
                app.router.navigate(app.router.buildRoute(self.forecastBy, e.point.id), {trigger: true});
            })
            .colorData('class', {step: 2})
            .groupBy(function(d) {
                return (self.isManager && self.getVisibility() === 'user') ?
                    d.sales_stage_short :
                    d.assigned_user_name;
            })
            .filterBy(function(d) {
                return d.probability;
            })
            .strings({
                legend: {
                    close: app.lang.getAppString('LBL_CHART_LEGEND_CLOSE'),
                    open: app.lang.getAppString('LBL_CHART_LEGEND_OPEN')
                },
                noData: app.lang.getAppString('LBL_CHART_NO_DATA')
            });

        this.on('data-changed', function() {
            this.renderChart();
        }, this);
        this.settings.on('change:filter_duration', this.changeFilter, this);
    },

    /**
     * Initialize plugins.
     * Only manager can toggle visibility.
     *
     * @return {View.Views.BaseBubbleChart} Instance of this view.
     * @protected
     */
    _initPlugins: function() {
        if (this.isManager) {
            this.plugins = _.union(this.plugins, [
                'ToggleVisibility'
            ]);
        }
        return this;
    },

    /**
     * Generic method to render chart with check for visibility and data.
     * Called by _renderHtml and loadData.
     */
    renderChart: function() {
        if (!this.isChartReady()) {
            return;
        }

        // Clear out the current chart before a re-render
        this.$('svg#' + this.cid).children().remove();

        // Load data into chart model and set reference to chart
        d3.select('svg#' + this.cid)
            .datum(this.chartCollection)
            .transition().duration(500)
            .call(this.chart);

        this.chart_loaded = _.isFunction(this.chart.render);
        this.displayNoData(!this.chart_loaded);
    },

    /**
     * Override the chartResize method in Chart plugin because
     * bubblechart nvd3 model uses render instead of update.
     */
    chartResize: function() {
        this.chart.render();
    },

    /**
     * Filter out records that don't meet date criteria
     * and convert into format convenient for d3
     */
    evaluateResult: function(data) {
        this.total = data.records.length;

        var statusOptions = 'sales_stage_dom',
            fieldMeta = app.metadata.getModule(this.forecastBy, 'fields');

        if (fieldMeta) {
            statusOptions = fieldMeta.sales_stage.options || statusOptions;
        }

        this.chartCollection = {
            data: data.records.map(function(d) {
                var sales_stage = app.lang.getAppListStrings(statusOptions)[d.sales_stage] || d.sales_stage;

                // if probability is null or empty set to 0
                if(_.isNull(d.probability) || d.probability === '') {
                    d.probability = 0;
                }

                // if likely is null or empty set to 0, for customers that do not require likely
                if(_.isNull(d[this.likelyField]) || d[this.likelyField] === '') {
                    d[this.likelyField] = 0;
                }

                return {
                    id: d.id,
                    x: d.date_closed,
                    y: Math.round(parseInt(d[this.likelyField], 10) / parseFloat(d.base_rate)),
                    shape: 'circle',
                    account_name: d.account_name,
                    assigned_user_name: d.assigned_user_name,
                    sales_stage: sales_stage,
                    sales_stage_short: sales_stage,
                    probability: parseInt(d.probability, 10),
                    base_amount: parseInt(d[this.likelyField], 10),
                    currency_symbol: app.currency.getCurrencySymbol(d.currency_id)
                };
            }, this),
            properties: {
                title: app.lang.getAppString('LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME'),
                value: data.records.length
            }
        };
    },

    /**
     * @inheritDoc
     */
    loadData: function(options) {
        var self = this,
            _filter = [
                {
                    'date_closed': {
                        '$gte': self.dateRange.begin
                    }
                },
                {
                    'date_closed': {
                        '$lte': self.dateRange.end
                    }
                }
            ];

        if (!this.isManager || this.getVisibility() === 'user') {
            _filter.push({'$owner': ''});
        }

        var _local = _.extend({'filter': _filter}, this.params);
        var url = app.api.buildURL(this.forecastBy, null, null, _local, this.params);

        // Request data from REST endpoint, evaluate result and trigger data change event
        app.api.call('read', url, null, {
            success: function(data) {
                self.evaluateResult(data);
                if (!self.disposed) {
                    self.trigger('data-changed');
                }
            },
            error: _.bind(function() {
                this.displayNoData(true);
            }, this),
            complete: options ? options.complete : null
        });
    },

    /**
     * Calculate date range based on date range dropdown control
     */
    setDateRange: function() {
        var now = new Date(),
            duration = parseInt(this.settings.get('filter_duration'), 10),
            startMonth = Math.floor(now.getMonth() / 3) * 3,
            startDate = new Date(now.getFullYear(), (duration === 12 ? 0 : startMonth + duration), 1),
            endDate = new Date(now.getFullYear(), (duration === 12 ? 12 : startDate.getMonth() + 3), 0);
        this.dateRange = {
            'begin': app.date.format(startDate, 'Y-m-d'),
            'end': app.date.format(endDate, 'Y-m-d')
        };
    },

    /**
     * Trigger data load event based when date range dropdown changes
     */
    changeFilter: function() {
        this.setDateRange();
        this.loadData();
    },

    /**
     * @inheritDoc
     */
    _dispose: function() {
        this.off('data-changed');
        this.settings.off('change:filter_duration');
        this._super('_dispose');
    }
})
