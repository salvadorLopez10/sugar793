nv.models.multiBar = function() {

  //============================================================
  // Public Variables with Default Settings
  //------------------------------------------------------------

  var margin = {top: 0, right: 0, bottom: 0, left: 0},
      width = 960,
      height = 500,
      x = d3.scale.ordinal(),
      y = d3.scale.linear(),
      id = Math.floor(Math.random() * 10000), //Create semi-unique ID in case user doesn't select one
      getX = function(d) { return d.x; },
      getY = function(d) { return d.y; },
      forceY = [0], // 0 is forced by default.. this makes sense for the majority of bar graphs... user can always do chart.forceY([]) to remove
      stacked = true,
      barColor = null, // adding the ability to set the color for each rather than the whole group
      disabled, // used in conjunction with barColor to communicate to multiBarChart what series are disabled
      clipEdge = true,
      showValues = false,
      valueFormat = nv.utils.numberFormatSI,
      withLine = false,
      vertical = true,
      baseDimension = 60,
      direction = 'ltr',
      delay = 200,
      xDomain,
      yDomain,
      nice = false,
      color = function(d, i) { return nv.utils.defaultColor()(d, d.series); },
      fill = color,
      textureFill = false,
      barColor = null, // adding the ability to set the color for each rather than the whole group
      classes = function(d, i) { return 'nv-group nv-series-' + d.series; },
      dispatch = d3.dispatch('chartClick', 'elementClick', 'elementDblClick', 'elementMouseover', 'elementMouseout', 'elementMousemove');

  //============================================================

  //============================================================
  // Private Variables
  //------------------------------------------------------------

  var x0,
      y0; //used to store previous scales

  //============================================================

  function chart(selection) {
    selection.each(function(data) {

      // baseDimension = stacked ? vertical ? 72 : 30 : 20;

      var container = d3.select(this),
          orientation = vertical ? 'vertical' : 'horizontal',
          availableWidth = width - margin.left - margin.right,
          availableHeight = height - margin.top - margin.bottom,
          dimX = vertical ? 'width' : 'height',
          dimY = vertical ? 'height' : 'width',
          dimLabel = vertical ? 'width' : 'height',
          valX = vertical ? 'x' : 'y',
          valY = vertical ? 'y' : 'x',
          seriesCount = 0,
          groupCount = 0,
          minSeries = 0,
          maxSeries = data.length - 1,
          verticalLabels = false,
          labelPosition = showValues,
          labelLengths = [],
          labelThickness = 0;

      function barLength(d, i) {
        return Math.max(Math.round(Math.abs(y(getY(d, i)) - y(0))), 0);
      }
      function barThickness() {
        return x.rangeBand() / (stacked ? 1 : data.length);
      }
      function sign(bool) {
        return bool ? 1 : -1;
      }

      if (stacked) {
        data = d3.layout.stack()
                 .offset('zero')
                 .values(function(d) { return d.values; })
                 .y(getY)(data);
        if (labelPosition === 'top' || labelPosition === true) {
          labelPosition = 'end';
        }
      } else if (labelPosition) {
        if (labelPosition === 'total') {
          labelPosition = 'top';
        }
        verticalLabels = vertical;
      }

      //------------------------------------------------------------
      // HACK for negative value stacking
      if (stacked) {
        var groupTotals = [];
        data[0].values.map(function(d, i) {
          var posBase = 0,
              negBase = 0;
          data.map(function(d) {
            var f = d.values[i];
            f.size = Math.abs(f.y);
            if (f.y < 0) {
              f.y1 = negBase - (vertical ? 0 : f.size);
              negBase -= f.size;
            } else {
              f.y1 = posBase + (vertical ? f.size : 0);
              posBase += f.size;
            }
          });
          groupTotals[i] = {neg: negBase, pos: posBase};
        });
      }

      //------------------------------------------------------------
      // Setup Scales

      // remap and flatten the data for use in calculating the scales' domains
      var seriesData = (xDomain && yDomain && !showValues) ?
            [] : // if we know xDomain and yDomain, no need to calculate
            d3.merge(data.map(function(d) {
              return d.values.map(function(d, i) {
                return {x: getX(d, i), y: getY(d, i), y0: d.y0, y1: d.y1};
              });
            }));

      groupCount = data[0].values.length;
      seriesCount = data.length;

      if (showValues) {
        var labelData = labelPosition === 'total' && stacked ?
              groupTotals.map(function(d) { return d.neg; }).concat(
                groupTotals.map(function(d) { return d.pos; })
              ) :
              seriesData.map(function(d, i) {
                return d.y;
              });

        var seriesExtents = d3.extent(data.map(function(d, i) { return d.series; }));
        minSeries = seriesExtents[0];
        maxSeries = seriesExtents[1];

        labelLengths = nv.utils.stringSetLengths(
            labelData,
            container,
            valueFormat,
            'nv-label-value'
          );

        labelThickness = nv.utils.stringSetThickness(
            [0123],
            container,
            valueFormat,
            'nv-label-value'
          )[0];
      }

      chart.resetDimensions = function(w, h) {
        width = w;
        height = h;
        availableWidth = w - margin.left - margin.right;
        availableHeight = h - margin.top - margin.bottom;
        resetScale();
      };

      function resetScale() {
        var maxX = vertical ? availableWidth : availableHeight,
            maxY = vertical ? availableHeight : availableWidth;

        var boundsWidth = stacked ? baseDimension : baseDimension * seriesCount + baseDimension,
            gap = baseDimension * (stacked ? 0.25 : 1),
            outerPadding = Math.max(0.25, (maxX - (groupCount * boundsWidth) - gap) / (2 * boundsWidth));

        if (withLine) {
          /*TODO: used in reports to keep bars from being too wide
            breaks pareto chart, so need to update line to adjust x position */
          x .domain(xDomain || seriesData.map(function(d) { return d.x; }))
            .rangeBands([0, maxX], 0.3);

        } else {
          x .domain(xDomain || seriesData.map(function(d) { return d.x; }))
            .rangeRoundBands([0, maxX], 0.25, outerPadding);
        }

        var yDomain = yDomain || d3.extent(seriesData.map(function(d) {
                var posOffset = (vertical ? 0 : d.y),
                    negOffset = (vertical ? d.y : 0);
                return stacked ? (d.y > 0 ? d.y1 + posOffset : d.y1 + negOffset) : d.y;
              }).concat(forceY));

        var yRange = vertical ? [availableHeight, 0] : [0, availableWidth];

        // initial set of y scale based on full dimension
        y .domain(yDomain)
          .range(yRange);


        if (showValues) {
          // this must go here because barThickness varies
          if (vertical && stacked && d3.max(labelLengths) + 8 > barThickness()) {
            verticalLabels = true;
          }
          //       vlbl   hlbl
          // vrt:   N      Y
          // hrz:   N      N
          dimLabel = vertical && !verticalLabels ? 'labelHeight' : 'labelWidth';
        }

        //------------------------------------------------------------
        // recalculate y.range if grouped and show values

        if (labelPosition === 'top' || labelPosition === 'total') {
          var maxBarLength = maxY,
              minBarLength = 0,
              maxValuePadding = 0,
              minValuePadding = 0,
              gap = vertical ? verticalLabels ? 2 : -2 : 2;

          labelData.forEach(function(d, i) {
            var labelDim = labelPosition === 'total' && stacked && vertical && !verticalLabels ? labelThickness : labelLengths[i];
            if (vertical && d > 0 || !vertical && d < 0) {
              if (y(d) - labelDim < minBarLength) {
                minBarLength = y(d) - labelDim;
                minValuePadding = labelDim;
              }
            } else {
              if (y(d) + labelDim > maxBarLength) {
                maxBarLength = y(d) + labelDim;
                maxValuePadding = labelDim;
              }
            }
          });

          if (vertical) {
            y.range([
              maxY - (y.domain()[0] < 0 ? maxValuePadding + gap + 2 : 0),
                      y.domain()[1] > 0 ? minValuePadding + gap : 0
            ]);
          } else {
            y.range([
                      y.domain()[0] < 0 ? minValuePadding + gap + 4 : 0,
              maxY - (y.domain()[1] > 0 ? maxValuePadding + gap : 0)
            ]);
          }
        }

        if (nice) {
          y.nice();
        }

        x0 = x0 || x;
        y0 = y0 || y;
      }

      resetScale();


      //------------------------------------------------------------
      // Setup containers and skeleton of chart

      var wrap = container.selectAll('.nvd3.nv-wrap').data([data]);
      var wrapEnter = wrap.enter().append('g');
      var defsEnter = wrapEnter.append('defs');
      var gEnter = wrapEnter.append('g');
      var g = wrap.select('g');

      wrap.attr('class', 'nvd3 nv-wrap nv-multibar');

      //set up the gradient constructor function
      chart.gradient = function(d, i, p) {
        return nv.utils.colorLinearGradient(d, id + '-' + i, p, color(d, i), wrap.select('defs'));
      };

      gEnter.append('g').attr('class', 'nv-groups');

      wrap.attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');

      //------------------------------------------------------------

      if (clipEdge) {
        defsEnter.append('clipPath')
          .attr('id', 'nv-edge-clip-' + id)
          .append('rect');
        wrap.select('#nv-edge-clip-' + id + ' rect')
          .attr('width', availableWidth)
          .attr('height', availableHeight);
      }
      g .attr('clip-path', clipEdge ? 'url(#nv-edge-clip-' + id + ')' : '');


      if (textureFill) {
        var mask = nv.utils.createTexture(defsEnter, id);
      }


      //------------------------------------------------------------

      var groups = wrap.select('.nv-groups').selectAll('.nv-group')
            .data(function(d) { return d; });

      var groupsEnter = groups.enter().append('g')
            .style('stroke-opacity', 1e-6)
            .style('fill-opacity', 1e-6);

      groups.exit()
        .style('stroke-opacity', 1e-6)
        .style('fill-opacity', 1e-6)
          .selectAll('g.nv-bar')
            .attr('y', function(d) {
              return stacked ? y0(d.y0) : y0(0);
            })
            .attr(dimX, 0)
            .remove();
      groups.exit().remove();

      groups
        .attr('class', classes)
        .attr('fill', fill)
        .classed('hover', function(d) { return d.hover; })
        .classed('nv-active', function(d) { return d.active === 'active'; })
        .classed('nv-inactive', function(d) { return d.active === 'inactive'; })
        .style({'stroke-opacity': 1, 'fill-opacity': 1});

      groups
        .on('mouseover', function(d, i, j) { //TODO: figure out why j works above, but not here
          d3.select(this).classed('hover', true);
        })
        .on('mouseout', function(d, i, j) {
          d3.select(this).classed('hover', false);
        });

      //------------------------------------------------------------

      var bars = groups.selectAll('g.nv-bar')
            .data(function(d) { return d.values; });

      var barsEnter = bars.enter().append('g').attr('class', 'nv-bar');

      bars.exit().remove();

      // The actual bar rectangle
      barsEnter.append('rect')
        .attr('class', 'nv-base')
        .style('fill', 'inherit')
        .attr('x', 0)
        .attr('y', 0);

      if (textureFill) {
        // For on click active bars
        barsEnter.append('rect')
          .attr('class', 'nv-texture')
          .attr('x', 0)
          .attr('y', 0)
          .style('mask', 'url(' + mask + ')');
      }

      // For label background
      barsEnter.append('rect')
        .attr('class', 'nv-label-box')
        .attr('x', 0)
        .attr('y', 0)
        .attr('width', 0)
        .attr('height', 0)
        .attr('rx', 2)
        .attr('ry', 2)
        .style('fill', 'transparent')
        .style('stroke-width', 0)
        .style('fill-opacity', 0);

      // For label text
      barsEnter.append('text') // TODO: should this be inside labelPosition?
        .attr('class', 'nv-label-value');

      //------------------------------------------------------------

      bars
        .attr('class', function(d, i) {
          return 'nv-bar ' + (getY(d, i) < 0 ? 'negative' : 'positive');
        })
        .attr('transform', function(d, i, j) {
          var trans = stacked ? {
                x: Math.round(x(getX(d, i))),
                y: Math.round(y(d.y1))
              } :
              { x: Math.round(j * barThickness() + x(getX(d, i))),
                y: Math.round(getY(d, i) < 0 ? (vertical ? y(0) : y(getY(d, i))) : (vertical ? y(getY(d, i)) : y(0)))
              };
          return 'translate(' + trans[valX] + ',' + trans[valY] + ')';
        });

      bars
        .select('rect.nv-base')
          .attr(valX, 0)
          .attr(dimY, barLength)
          .attr(dimX, barThickness);

      if (textureFill) {
        bars
          .select('rect.nv-texture')
            .attr(valX, 0)
            .attr(dimY, barLength)
            .attr(dimX, barThickness)
            .style('fill', function(d, i) {
              var backColor = fill(d),
                  foreColor = nv.utils.getTextContrast(backColor, i);
              return foreColor;
            });
      }

      //------------------------------------------------------------
      // Assign events

      function buildEventObject(e, d, i, j) {
        return {
            value: getY(d, i),
            point: d,
            series: data[j],
            pointIndex: i,
            seriesIndex: j,
            id: id,
            e: e
          };
      }

      bars
        .on('mouseover', function(d, i, j) { //TODO: figure out why j works above, but not here
          var eo = buildEventObject(d3.event, d, i, j);
          dispatch.elementMouseover(eo);
        })
        .on('mousemove', function(d, i, j) {
          dispatch.elementMousemove(d3.event);
        })
        .on('mouseout', function(d, i, j) {
          dispatch.elementMouseout();
        })
        .on('click', function(d, i, j) {
          d3.event.stopPropagation();
          var eo = buildEventObject(d3.event, d, i, j);
          dispatch.elementClick(eo);
        })
        .on('dblclick', function(d, i, j) {
          d3.event.stopPropagation();
          var eo = buildEventObject(d3.event, d, i, j);
          dispatch.elementDblClick(eo);
        });

      //------------------------------------------------------------
      // Bar text: begin, middle, end, top
      var barText = bars.select('.nv-label-value');

      if (showValues) {

          barText
            .text(function(d, i) {
              var val = labelPosition === 'total' && stacked ?
                getY(d, i) < 0 ?
                  groupTotals[i].neg :
                  groupTotals[i].pos :
                getY(d, i);
              return valueFormat(val);
            })
            .each(function(d, i) {
              var bbox = this.getBoundingClientRect();
              d.labelWidth = Math.floor(bbox.width) + 4;
              d.labelHeight = Math.floor(bbox.height);
              d.barLength = barLength(d, i);
              d.barThickness = barThickness();
            });

          barText
            .attr('dy', '0.35em')
            .attr('text-anchor', function(d, i) {
              var anchor = 'middle',
                  negative = getY(d, i) < 0;
              if (vertical && !verticalLabels) {
                anchor = 'middle';
              } else {
                switch (labelPosition) {
                  case 'start':
                    anchor = negative ? 'end' : 'start';
                    break;
                  case 'middle':
                    anchor = 'middle';
                    break;
                  case 'end':
                    anchor = negative ? 'start' : 'end';
                    break;
                  case 'top':
                  case 'total':
                    anchor = negative ? 'end' : 'start';
                    break;
                }
                anchor = direction === 'rtl' && anchor !== 'middle' ? anchor === 'start' ? 'end' : 'start' : anchor;
              }
              return anchor;
            })
            .attr('transform', 'rotate(' + (verticalLabels ? -90 : 0) + ' 0,0)')
            .attr('x', function(d, i) {
              var offset = 0,
                  negative = getY(d, i) < 0 ? -1 : 1,
                  shift = negative < 0,
                  padding = (4 + (verticalLabels || !vertical) * 2) * negative;

              if (vertical && !verticalLabels) {
                offset = d.barThickness / 2;
              } else {
                switch (labelPosition) {
                  case 'start':
                    // vrt: neg 0 , pos -1
                    // hrz: neg 1 , pos  0
                    offset = d.barLength * (shift - verticalLabels) + padding;
                    break;
                  case 'middle':
                    offset = d.barLength * (verticalLabels ? -1 : 1) / 2;
                    break;
                  case 'end':
                    // vrt: neg -1 , pos 0.
                    // hrz: neg  0 , pos 1;
                    offset = d.barLength * (!verticalLabels - shift) - padding;
                    break;
                  case 'top':
                  case 'total':
                    offset = d.barLength * (!verticalLabels - shift) + 2 * negative;
                    break;
                }
              }
              return offset;
            })
            .attr('y', function(d, i) {
              var offset = 0,
                  negative = getY(d, i) < 0 ? -1 : 1,
                  shift = negative < 0,
                  padding = (d.labelHeight / 2 + (4 + verticalLabels * 2) * (labelPosition === 'total' ? 0 : 1)) * negative;

              if (vertical && !verticalLabels) {
                switch (labelPosition) {
                  case 'start':
                    offset = d.barLength * (1 - shift) - padding;
                    break;
                  case 'middle':
                    offset = d.barLength / 2;
                    break;
                  case 'end':
                    offset = d.barLength * (0 + shift) + padding;
                    break;
                  case 'total':
                    offset = d.barLength * (0 + shift) + padding * -1;
                    break;
                }
              } else {
                offset = d.barThickness / 2;
              }
              return offset;
            })
            .style('fill', function(d, i, j) {
              if (labelPosition === 'top' || labelPosition === 'total') {
                return '#000';
              }
              // var backColor = d3.select(this.previousSibling).style('fill'),
              var backColor = fill(d),
                  textColor = nv.utils.getTextContrast(backColor, i);
              return textColor;
            })
            .style('fill-opacity', function(d, i) {
              if (!stacked) {
                return 1;
              } else if (labelPosition === 'total') {
                if (d.series !== minSeries && d.series !== maxSeries) {
                  return 0;
                }
                var y = getY(d, i);
                return (y <  0 && groupTotals[i].neg === d.y1 + (vertical ? y : 0)) ||
                       (y >= 0 && groupTotals[i].pos === d.y1 + (vertical ? 0 : y)) ? 1 : 0;
              } else {
                var lengthOverlaps = d.barLength < (!vertical || verticalLabels ? d.labelWidth : d.labelHeight) + 8,
                    thicknessOverlaps = d.barThickness < (!vertical || verticalLabels ? d.labelHeight : d.labelWidth) + 4;
                return labelPosition !== 'top' && (lengthOverlaps || thicknessOverlaps) ? 0 : 1;
              }
            });

          function getLabelBoxOffset(d, i, s, gap) {
            var offset = 0,
                negative = getY(d, i) < 0 ? -1 : 1,
                shift = s === negative < 0 ? 1 : 0,
                barLength = d.barLength - d[dimLabel];
            if (s ? vertical : !vertical) {
              offset = (d.barThickness - (verticalLabels === s ? d.labelHeight : d.labelWidth)) / 2;
            } else {
              switch (labelPosition) {
                case 'start':
                  offset = barLength * (0 + shift) + gap * negative;
                  break;
                case 'middle':
                  offset = barLength / 2;
                  break;
                case 'end':
                  offset = barLength * (1 - shift) - gap * negative;
                  break;
                case 'top':
                  offset = d.barLength * (1 - shift) - d.labelWidth * (0 + shift);
                  break;
                case 'total':
                  offset = d.barLength * (1 - shift) - (verticalLabels === s ? d.labelHeight : d.labelWidth) * (0 + shift);
                  break;
              }
            }

            return offset;
          }

          //------------------------------------------------------------
          // Label background box
          bars.filter(function(d, i) {
              return labelPosition === 'total' && stacked ? (d.series !== minSeries && d.series !== maxSeries) : false;
            }).select('rect.nv-label-box')
            .style('fill-opacity', 0);

          bars.filter(function(d, i) {
              return labelPosition === 'total' && stacked ? (d.series === minSeries || d.series === maxSeries) : true;
            }).select('rect.nv-label-box')
            .attr('x', function(d, i) {
              return getLabelBoxOffset(d, i, true, 4);
            })
            .attr('y', function(d, i) {
              return getLabelBoxOffset(d, i, false, -4);
            })
            .attr('width', function(d, i) {
              return verticalLabels ? d.labelHeight : d.labelWidth;
            })
            .attr('height', function(d, i) {
              return verticalLabels ? d.labelWidth : d.labelHeight;
            })
            .style('fill', function(d, i) {
              return labelPosition === 'top' || labelPosition === 'total' ? '#fff' : fill(d, i);
            })
            .style('fill-opacity', function(d, i) {
              var lengthOverlaps = d.barLength < (!vertical || verticalLabels ? d.labelWidth : d.labelHeight) + 8,
                  thicknessOverlaps = d.barThickness < (!vertical || verticalLabels ? d.labelHeight : d.labelWidth) + 4;
              return labelPosition !== 'top' && (lengthOverlaps || thicknessOverlaps) ? 0 : 1;
            });

      } else {
        barText
          .text('')
          .style('fill-opacity', 0);

        bars
          .select('rect.label-box')
            .style('fill-opacity', 0);
      }

      // TODO: fix way of passing in a custom color function
      // if (barColor) {
      //   if (!disabled) {
      //     disabled = data.map(function() { return true; });
      //   }
      //   bars
      //     //.style('fill', barColor)
      //     //.style('stroke', barColor)
      //     //.style('fill', function(d,i,j) { return d3.rgb(barColor(d,i)).darker(j).toString(); })
      //     //.style('stroke', function(d,i,j) { return d3.rgb(barColor(d,i)).darker(j).toString(); })
      //     .style('fill', function(d, i, j) {
      //       return d3.rgb(barColor(d, i))
      //                .darker(disabled.map(function(d, i) { return i; })
      //                .filter(function(d, i) { return !disabled[i]; })[j])
      //                .toString();
      //     })
      //     .style('stroke', function(d, i, j) {
      //       return d3.rgb(barColor(d, i))
      //                .darker(disabled.map(function(d, i) { return i; })
      //                .filter(function(d, i) { return !disabled[i]; })[j])
      //                .toString();
      //     });
      // }

      //store old scales for use in transitions on update
      x0 = x.copy();
      y0 = y.copy();

    });

    return chart;
  }


  //============================================================
  // Expose Public Variables
  //------------------------------------------------------------

  chart.dispatch = dispatch;

  chart.color = function(_) {
    if (!arguments.length) {
      return color;
    }
    color = _;
    return chart;
  };
  chart.fill = function(_) {
    if (!arguments.length) {
      return fill;
    }
    fill = _;
    return chart;
  };
  chart.classes = function(_) {
    if (!arguments.length) {
      return classes;
    }
    classes = _;
    return chart;
  };
  chart.gradient = function(_) {
    if (!arguments.length) {
      return gradient;
    }
    gradient = _;
    return chart;
  };

  chart.x = function(_) {
    if (!arguments.length) {
      return getX;
    }
    getX = _;
    return chart;
  };

  chart.y = function(_) {
    if (!arguments.length) {
      return getY;
    }
    getY = _;
    return chart;
  };

  chart.margin = function(_) {
    if (!arguments.length) {
      return margin;
    }
    for (var prop in _) {
      if (_.hasOwnProperty(prop)) {
        margin[prop] = _[prop];
      }
    }
    return chart;
  };

  chart.width = function(_) {
    if (!arguments.length) {
      return width;
    }
    width = _;
    return chart;
  };

  chart.height = function(_) {
    if (!arguments.length) {
      return height;
    }
    height = _;
    return chart;
  };

  chart.xScale = function(_) {
    if (!arguments.length) {
      return x;
    }
    x = _;
    return chart;
  };

  chart.yScale = function(_) {
    if (!arguments.length) {
      return y;
    }
    y = _;
    return chart;
  };

  chart.xDomain = function(_) {
    if (!arguments.length) {
      return xDomain;
    }
    xDomain = _;
    return chart;
  };

  chart.yDomain = function(_) {
    if (!arguments.length) {
      return yDomain;
    }
    yDomain = _;
    return chart;
  };

  chart.forceY = function(_) {
    if (!arguments.length) {
      return forceY;
    }
    forceY = _;
    return chart;
  };

  chart.stacked = function(_) {
    if (!arguments.length) {
      return stacked;
    }
    stacked = _;
    return chart;
  };

  chart.clipEdge = function(_) {
    if (!arguments.length) {
      return clipEdge;
    }
    clipEdge = _;
    return chart;
  };

  chart.barColor = function(_) {
    if (!arguments.length) {
      return barColor;
    }
    barColor = nv.utils.getColor(_);
    return chart;
  };

  chart.disabled = function(_) {
    if (!arguments.length) {
      return disabled;
    }
    disabled = _;
    return chart;
  };

  chart.id = function(_) {
    if (!arguments.length) {
      return id;
    }
    id = _;
    return chart;
  };

  chart.delay = function(_) {
    if (!arguments.length) {
      return delay;
    }
    delay = _;
    return chart;
  };

  chart.showValues = function(_) {
    if (!arguments.length) {
      return showValues;
    }
    showValues = isNaN(_) ? _ : parseInt(_, 10);
    return chart;
  };

  chart.valueFormat = function(_) {
    if (!arguments.length) {
      return valueFormat;
    }
    valueFormat = _;
    return chart;
  };

  chart.withLine = function(_) {
    if (!arguments.length) {
      return withLine;
    }
    withLine = _;
    return chart;
  };

  chart.vertical = function(_) {
    if (!arguments.length) {
      return vertical;
    }
    vertical = _;
    return chart;
  };

  chart.baseDimension = function(_) {
    if (!arguments.length) {
      return baseDimension;
    }
    baseDimension = _;
    return chart;
  };

  chart.direction = function(_) {
    if (!arguments.length) {
      return direction;
    }
    direction = _;
    return chart;
  };

  chart.nice = function(_) {
    if (!arguments.length) {
      return nice;
    }
    nice = _;
    return chart;
  };

  chart.textureFill = function(_) {
    if (!arguments.length) return textureFill;
    textureFill = _;
    return chart;
  };

  //============================================================

  return chart;
};
