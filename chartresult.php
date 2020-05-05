
<!doctype html>
<html>

<head>
	<title>Pie Chart</title>
	<script src="jschart/Chart.bundle.js"></script>
	
<style>
	#canvas-holder {
  width: 100%;
  margin-top: 50px;
  text-align: center;
}

#chartjs-tooltip {
  opacity: 1;
  position: absolute;
  background: rgba(0, 0, 0, .7);
  color: white;
  border-radius: 3px;
  -webkit-transition: all .1s ease;
  transition: all .1s ease;
  pointer-events: none;
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}

.chartjs-tooltip-key {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin-right: 10px;
}
	</style>
	


<div id="canvas-holder" style="width: 400px;">
  <canvas id="chart-area" width="300" height="300" />
</div>

<div id="chartjs-tooltip"></div>
	

	
	<script>
	
	
	window.chartColors = {
	green: 'rgb(66, 244, 131)',
	red: 'rgb(244, 65, 101)',
	black: 'rgb(22, 21, 28)'
};

Chart.defaults.global.tooltips.custom = function(tooltip) {
  // Tooltip Element
  var tooltipEl = document.getElementById('chartjs-tooltip');

  // Hide if no tooltip
  if (tooltip.opacity === 0) {
    tooltipEl.style.opacity = 0;
    return;
  }

  // Set Text
  if (tooltip.body) {
    var total = 0;

    // get the value of the datapoint
    var value = this._data.datasets[tooltip.dataPoints[0].datasetIndex].data[tooltip.dataPoints[0].index].toLocaleString();

    // calculate value of all datapoints
  this._data.datasets[tooltip.dataPoints[0].datasetIndex].data.forEach(function(e) {
      total += e;
    });

    // calculate percentage and set tooltip value
    tooltipEl.innerHTML = '<h1>' + (value / total * 100) + '%</h1>';
  }

  // calculate position of tooltip
  var centerX = (this._chartInstance.chartArea.left + this._chartInstance.chartArea.right) / 2;
  var centerY = ((this._chartInstance.chartArea.top + this._chartInstance.chartArea.bottom) / 2);

  // Display, position, and set styles for font
  tooltipEl.style.opacity = 1;
  tooltipEl.style.left = centerX + 'px';
  tooltipEl.style.top = centerY + 'px';
  tooltipEl.style.fontFamily = tooltip._fontFamily;
  tooltipEl.style.fontSize = tooltip.fontSize;
  tooltipEl.style.fontStyle = tooltip._fontStyle;
  tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
};

var config = {
  type: 'pie',
  data: {
    datasets: [{
      data: [50, 50, 100],
      backgroundColor: [
        window.chartColors.green,
        window.chartColors.red,
        window.chartColors.black,
     
      ],
    }],
    labels: [
      "Correct",
      "Incorrect",
      "Unanswered"
    ]
  },
  options: {
    responsive: true,
    legend: {
      display: true,
      labels: {
        padding: 20
      },
    },
    tooltips: {
      enabled: false,
    }
  }
};

window.onload = function() {
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPie = new Chart(ctx, config);
};
	</script>
	

</html>
