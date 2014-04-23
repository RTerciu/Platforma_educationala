@extends('layout.public_profile_layout')

@section('profile')

<h1>Intrari si iesiri <small>pentru ca e bine sa stii</small></h1>
<hr>
<div class="chart">

</div>
<script>
	
d3.chart("FrequencyChart", {

  // these are the data attributes required by the chart.
  dataAttrs: ["value"],

  initialize: function() {

    var chart = this;

    // assign a css class name to the chart highest container
    // so that we can also style it
    chart.base.classed("CircleChart", true);

    chart.bases = {
      circles : this.base.append("g").classed("circles", true)
    };

    // the x scale will be adjusted to fit all circles in.
    // we give it 2 radii worth of padding on each side.
    chart.scales = {
      xScale : chart.xScale = d3.scale.linear()
    };

    var updateScale = function() {
      chart.scales.xScale.range([
        chart.radius() * 2,
        chart.width() - (chart.radius() * 2)
      ]);
    };

    var redraw = function() {
      if (chart.data) {
        chart.draw(chart.data);
      }
    };

    chart.on("change:width", function() {
      updateScale();
      chart.base.style("width", chart.width());
      redraw();
    });

    chart.on("change:height", function() {
      chart.base.style("height", chart.height());
      redraw();
    });

    chart.on("change:radius", function() {
      updateScale();
      redraw();
    });

    // create a circle layer
    chart.layer("circles", chart.bases.circles, {

      dataBind: function(data) {
        var chart = this.chart();

        // find the min and max of our data values so we can
        // set the domain of the xScale.
        chart.xScale.domain(d3.extent(data, function(d) {
          return d.value;
        }));

        return this.selectAll("circle")
          .data(data);
      },

      insert: function() {
        return this.append("circle")
          .classed("circle", true);
      },

      events: {
        enter: function() {
          var chart = this.chart();
          // position the circles at the appropriate location
          // and set their size.
          return this.attr("cy", chart.height()/2)
            .attr("cx", function(d) {
              return chart.xScale(d.value);
            })
            .attr("r", function(d)
			{
				return d.value/10;
			});
        }
      }

    });
  },

  transform: function(data) {

    // cache data so we can redraw the chart if we need to.
    this.data = data;
    return data;
  },

  // --- getters/setters.
  radius : function(newRadius) {
    if (arguments.length === 0) {
      return this._radius;
    }
    this._radius = newRadius;
    this.trigger("change:radius", newRadius);
    return this;
  },

  width: function(newWidth) {
    if (arguments.length === 0) {
      return this._width;
    }
    this._width = newWidth;
    this.trigger("change:width", newWidth);
    return this;
  },

  height: function(newHeight) {
    if (arguments.length === 0) {
      return this._height;
    }
    this._height = newHeight;
    this.trigger("change:height", newHeight);
    return this;
  }
});

d3.chart("FrequencyChart").extend("LabeledFrequencyChart", {

  dataAttrs: ["name"],

  initialize: function() {

    var chart = this;

    // assign a css class name to the chart highest container
    // so that we can also style it
    chart.base.classed("LabeledCircleChart", true);
    chart.bases.labels = this.base.append("g").classed("labels", true);

    // create a labels layer
    this.layer("labels", chart.bases.labels, {
      dataBind: function(data) {
        return this.selectAll("text")
          .data(data);
      },
      insert: function() {
        return this.append("text")
          .attr("text-anchor", "middle")
          .classed("label", true);
      },
      events: {
        enter: function() {
          var chart = this.chart();

          // position the labels at the same x of the circle
          // but about two radii's worth above (Which really gives)
          // one radius worth of padding.
          return this.attr("x", function(d,i) {
			  var xScale = d3.scale.linear()
					.domain([1,12])
					.range([1,800]);
			
              return xScale(i);
            })
          .attr("y", 7)
          .text(function(d) {
            return d.name;
          })
          .style("font-size", "7pt");
        }
      }
    });
  }
});
		


	$(document).ready(function ()
	{
		var data;

		d3.json("{{URL::to('signinlogs/'.$user->id)}}", function(error,json)
		{
			var frequencyChart = d3.select('.chart')
					.append("svg")
					.chart("FrequencyChart")
					.height(70)
					.width(800)
					.radius(6);
					  
			var monthFrequencyChart = d3.select('.chart')
					.append("svg")
					.chart("LabeledFrequencyChart")
					.radius(3)
					.height(70)
					.width(800);
					  
			
			if(error) return console.warn(error);
			data = json;
			console.log(data);
			
			var data = [
			  { name : "Jan", month: 1, value : 80 },
			  { name : "Feb", month: 2, value : 32 },
			  { name : "Mar", month: 3, value : 48 },
			  { name : "Apr", month: 4, value : 49 },
			  { name : "May", month: 5, value : 58 },
			  { name : "Jun", month: 6, value : 68 },
			  { name : "Jul", month: 7, value : 74 },
			  { name : "Aug", month: 8, value : 73 },
			  { name : "Sept", month: 9, value : 65 },
			  { name : "Oct", month: 10, value : 54 },
			  { name : "Nov", month: 11, value : 45 },
			  { name : "Dec", month: 12, value : 35 }
			];
			
			frequencyChart.draw(data);
			monthFrequencyChart.draw(data);
		});
	});

</script>
	
@stop

