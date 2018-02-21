nv.models.pie = function() {

  //============================================================
  // Public Variables with Default Settings
  //------------------------------------------------------------

  var margin = {top: 0, right: 0, bottom: 0, left: 0},
      width = 500,
      height = 500,
      getValues = function(d) { return d; },
      getX = function(d) { return d.key; },
      getY = function(d) { return d.value; },
      getDescription = function(d) { return d.description; },
      id = Math.floor(Math.random() * 10000), //Create semi-unique ID in case user doesn't select one
      valueFormat = d3.format(',.2f'),
      showLabels = true,
      showLeaders = true,
      pieLabelsOutside = true,
      donutLabelsOutside = false,
      labelThreshold = 0.02, //if slice percentage is under this, don't show label
      donut = false,
      labelSunbeamLayout = false,
      startAngle = false,
      endAngle = false,
      donutRatio = 0.447,
      durationMs = 0,
      color = nv.utils.defaultColor(),
      fill = color,
      classes = function(d, i) { return 'nv-slice nv-series-' + i; },
      dispatch = d3.dispatch('chartClick', 'elementClick', 'elementDblClick', 'elementMouseover', 'elementMouseout', 'elementMousemove');

  //============================================================


  function chart(selection) {
    selection.each(function(data) {
      var availableWidth = width - margin.left - margin.right,
          availableHeight = height - margin.top - margin.bottom,
          radius = Math.min(availableWidth, availableHeight) / 2,
          arcRadius = radius - (showLabels ? radius / 8 : 0),
          container = d3.select(this);

      //------------------------------------------------------------
      // Setup containers and skeleton of chart
      var wrap = container.selectAll('.nv-wrap.nv-pie').data([data]);
      var wrapEnter = wrap.enter().append('g').attr('class', 'nvd3 nv-wrap nv-pie nv-chart-' + id);
      var defsEnter = wrapEnter.append('defs');
      var gEnter = wrapEnter.append('g');
      var g = wrap.select('g');

      //set up the gradient constructor function
      chart.gradient = function(d, i) {
        var params = {x: 0, y: 0, r: radius, s: (donut ? (donutRatio * 100) + '%' : '0%'), u: 'userSpaceOnUse'};
        return nv.utils.colorRadialGradient(d, id + '-' + i, params, color(d, i), wrap.select('defs'));
      };

      gEnter.append('g').attr('class', 'nv-pie');

      wrap.attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');
      g.select('.nv-pie').attr('transform', 'translate(' + availableWidth / 2 + ',' + availableHeight / 2 + ')');

      //------------------------------------------------------------

      container
        .on('click', function(d, i) {
          dispatch.chartClick({
            data: d,
            index: i,
            pos: d3.event,
            id: id
          });
        });

      var arc = d3.svg.arc()
            .outerRadius(arcRadius);

      if (startAngle) {
        arc.startAngle(startAngle);
      }
      if (endAngle) {
        arc.endAngle(endAngle);
      }
      if (donut) {
        arc.innerRadius(arcRadius * donutRatio);
      }

      // Setup the Pie chart and choose the data element
      var pie = d3.layout.pie()
            .sort(null)
            .value(function(d) { return d.disabled ? 0 : getY(d); });

      var slices = wrap.select('.nv-pie').selectAll('.nv-slice')
            .data(pie);

      slices.exit().remove();

      var ae = slices.enter().append('g')
            .attr('class', function(d, i) { return this.getAttribute('class') || classes(d.data, i); })
            .on('mouseover', function(d, i) {
              d3.select(this).classed('hover', true);
              dispatch.elementMouseover({
                label: getX(d.data),
                value: getY(d.data),
                point: d.data,
                pointIndex: i,
                pos: [d3.event.pageX, d3.event.pageY],
                id: id
              });
            })
            .on('mouseout', function(d, i) {
              d3.select(this).classed('hover', false);
              dispatch.elementMouseout({
                label: getX(d.data),
                value: getY(d.data),
                point: d.data,
                index: i,
                id: id
              });
            })
            .on('mousemove', function(d, i) {
              dispatch.elementMousemove({
                point: d,
                pointIndex: i,
                pos: [d3.event.pageX, d3.event.pageY],
                id: id
              });
            })
            .on('click', function(d, i) {
              dispatch.elementClick({
                label: getX(d.data),
                value: getY(d.data),
                point: d.data,
                index: i,
                pos: d3.event,
                id: id
              });
              d3.event.stopPropagation();
            })
            .on('dblclick', function(d, i) {
              dispatch.elementDblClick({
                label: getX(d.data),
                value: getY(d.data),
                point: d.data,
                index: i,
                pos: d3.event,
                id: id
              });
              d3.event.stopPropagation();
            });

      var paths = ae.append('path')
            .each(function(d) { this._current = d; });
            //.attr('d', arc);

      slices.select('path')
        .style('fill', function(d, i) { return fill(d.data, d.data.series); })
        .style('stroke', '#ffffff')
        .style('stroke-width', 3)
        .style('stroke-opacity', 1);

      slices.select('path').transition().duration(durationMs)
        .attr('d', arc)
        .attrTween('d', arcTween);

      if (showLabels) {
        // This does the normal label
        var labelsArc = d3.svg.arc().innerRadius(0);

        if (pieLabelsOutside) {
          labelsArc = arc;
        }

        if (donutLabelsOutside) {
          labelsArc = d3.svg.arc().outerRadius(arc.outerRadius());
        }

        ae.append('g').classed('nv-label', true)
          .each(function(d, i) {
            var group = d3.select(this);

            group
              .attr('transform', 'translate(0,0)');

            if (!pieLabelsOutside && !donutLabelsOutside) {
              group.append('rect')
                  .style('fill', '#fff')
                  .style('fill-opacity', 0.4)
                  .style('stroke-opacity', 0)
                  .attr('rx', 3)
                  .attr('ry', 3);
            }

            group.append('text')
                .attr('dy', '.35em')
                .style('text-anchor', labelSunbeamLayout ? ((d.startAngle + d.endAngle) / 2 < Math.PI ? 'start' : 'end') : 'middle') //center the text on it's origin or begin/end if orthogonal aligned
                .style('fill', '#000');
          });

        if (showLeaders) {
          ae.append('polyline')
            .attr('class', 'nv-label-leader')
            .style('stroke', '#aaa')
            .style('fill', 'none');
        }

        slices.select('.nv-label').transition().duration(durationMs)
          .attr('transform', function(d) {
            if (labelSunbeamLayout) {
              d.outerRadius = arcRadius + 10; // Set Outer Coordinate
              d.innerRadius = arcRadius + 15; // Set Inner Coordinate
              var rotateAngle = (d.startAngle + d.endAngle) / 2 * (180 / Math.PI);
              if ((d.startAngle + d.endAngle) / 2 < Math.PI) {
                rotateAngle -= 90;
              } else {
                rotateAngle += 90;
              }
              return 'translate(' + labelsArc.centroid(d) + ') rotate(' + rotateAngle + ')';
            } else {
              d.outerRadius = radius + 0; // Set Outer Coordinate
              d.innerRadius = radius + 0; // Set Inner Coordinate
              var labelsPosition = labelsArc.centroid(d),
                  leadOffset = showLeaders ? ((d.startAngle + d.endAngle) / 2 < Math.PI ? 15 : -15) : 0;
              return 'translate(' + [labelsPosition[0] + leadOffset, labelsPosition[1]] + ')';
            }
          });

        if (showLeaders) {
          slices.select('.nv-label-leader').transition().duration(durationMs)
            .attr('points', function(d) {
              d.outerRadius = radius; // Set Outer Coordinate
              d.innerRadius = radius; // Set Inner Coordinate
              var outerArcPoints = d3.svg.arc()
                    .outerRadius(arc.outerRadius())
                    .innerRadius(arc.outerRadius())
                    .centroid(d),
                  labelsArcPoints = labelsArc.centroid(d),
                  leadOffset = (d.startAngle + d.endAngle) / 2 < Math.PI ? 10 : -10;
                  leadArcPoints = [labelsArcPoints[0] + leadOffset, labelsArcPoints[1]];
              return outerArcPoints + ' ' + labelsArcPoints + ' ' + leadArcPoints;
            })
            .style('stroke-opacity', function(d, i) {
              var percent = (d.endAngle - d.startAngle) / (2 * Math.PI),
                  label = getX(d.data);
              return (label && percent > labelThreshold) ? 1 : 0;
            });
        }

        slices.each(function(d, i) {
          var slice = d3.select(this);
          slice
            .select('.nv-label text')
              .style('text-anchor', (d.startAngle + d.endAngle) / 2 < Math.PI ? 'start' : 'end') //center the text on it's origin or begin/end if orthogonal aligned
              .text(function(d, i) {
                var percent = (d.endAngle - d.startAngle) / (2 * Math.PI),
                    label = getX(d.data);
                return (label && percent > labelThreshold) ? label : '';
              });

          if (!pieLabelsOutside && !donutLabelsOutside) {
            var textBox = slice.select('text').node().getBBox();
            slice.select(".nv-label rect")
              .attr("width", textBox.width + 10)
              .attr("height", textBox.height + 10)
              .attr("transform", function() {
                return "translate(" + [textBox.x - 5, textBox.y - 5] + ")";
              });
          }
        });
      }

      // Computes the angle of an arc, converting from radians to degrees.
      function angle(d) {
        var a = (d.startAngle + d.endAngle) * 90 / Math.PI - 90;
        return a > 90 ? a - 180 : a;
      }

      function arcTween(a) {
        if (!donut) a.innerRadius = 0;
        var i = d3.interpolate(this._current, a);
        this._current = i(0);
        return function(t) {
          return arc(i(t));
        };
      }

      function tweenPie(b) {
        b.innerRadius = 0;
        var i = d3.interpolate({startAngle: 0, endAngle: 0}, b);
        return function(t) {
            return arc(i(t));
        };
      }

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

  chart.margin = function(_) {
    if (!arguments.length) {
      return margin;
    }
    margin.top    = typeof _.top    != 'undefined' ? _.top    : margin.top;
    margin.right  = typeof _.right  != 'undefined' ? _.right  : margin.right;
    margin.bottom = typeof _.bottom != 'undefined' ? _.bottom : margin.bottom;
    margin.left   = typeof _.left   != 'undefined' ? _.left   : margin.left;
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

  chart.values = function(_) {
    if (!arguments.length) {
      return getValues;
    }
    getValues = _;
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
    getY = d3.functor(_);
    return chart;
  };

  chart.description = function(_) {
    if (!arguments.length) {
      return getDescription;
    }
    getDescription = _;
    return chart;
  };

  chart.showLabels = function(_) {
    if (!arguments.length) {
      return showLabels;
    }
    showLabels = _;
    return chart;
  };

  chart.labelSunbeamLayout = function(_) {
    if (!arguments.length) {
      return labelSunbeamLayout;
    }
    labelSunbeamLayout = _;
    return chart;
  };

  chart.donutLabelsOutside = function(_) {
    if (!arguments.length) {
      return donutLabelsOutside;
    }
    donutLabelsOutside = _;
    return chart;
  };

  chart.pieLabelsOutside = function(_) {
    if (!arguments.length) {
      return pieLabelsOutside;
    }
    pieLabelsOutside = _;
    return chart;
  };

  chart.showLeaders = function(_) {
    if (!arguments.length) {
      return showLeaders;
    }
    showLeaders = _;
    return chart;
  };

  chart.donut = function(_) {
    if (!arguments.length) {
      return donut;
    }
    donut = _;
    return chart;
  };

  chart.donutRatio = function(_) {
    if (!arguments.length) {
      return donutRatio;
    }
    donutRatio = _;
    return chart;
  };

  chart.startAngle = function(_) {
    if (!arguments.length) {
      return startAngle;
    }
    startAngle = _;
    return chart;
  };

  chart.endAngle = function(_) {
    if (!arguments.length) {
      return endAngle;
    }
    endAngle = _;
    return chart;
  };

  chart.id = function(_) {
    if (!arguments.length) {
      return id;
    }
    id = _;
    return chart;
  };

  chart.valueFormat = function(_) {
    if (!arguments.length) {
      return valueFormat;
    }
    valueFormat = _;
    return chart;
  };

  chart.labelThreshold = function(_) {
    if (!arguments.length) {
      return labelThreshold;
    }
    labelThreshold = _;
    return chart;
  };
  //============================================================

  return chart;
}
