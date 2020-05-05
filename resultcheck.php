 
 <?php require_once 'templates/header.php';?>
 
 <?php 


	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		
	
?>


<?php

	
	

	
	
	$sql="select * from mcq where eid='EX01' ";
	$result=mysqli_query($con,$sql);



	$c=1;
$storeArray = Array();
$difficulty = Array();
	while($c<=32)
	{
	$rest='qid'.$c;
	
	$sql="select * from mcq where eid='EX01'";
	$result=mysqli_query($con,$sql);
	
	$rowans = mysqli_fetch_array($result);
	
	
	
	$qid=$rowans['qid'];
	 $rr=$rowans['ans'];                          
	$rr1=$rowans['dif'];
	

    $storeArray[] =$rr; 
	$difficulty[]=$rr1;
	echo $rest."= ".$rr." ,  ";
	echo "diffi= ".$rr1." || ";
	$c++;
	}
	

	
	?>
	<?php echo "<br><br><br>";
	/*$sql="select * from mcq where eid='EX01' and qid='3'";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	echo $row['ans'];
	*/
	$correct=0;$unanswered=0;$incorrect=0;$finalresult=0;
	$c=1;
$result = mysqli_query($con,"SELECT * FROM s_exam where eid='EX01'  and uid='".$_SESSION['uid']."' ");
$storeArray1 = Array();
while ($row = mysqli_fetch_array($result)) {
	while($c<=32)
	{
	$rest='res'.$c;
	 $rr=$row[$rest];
	if($rr=='')
	{$rr=9;
	$unanswered++;
	}
	if($rr!=9)
	{
    $storeArray1[] =$rr; 
	echo $rest."= ".$rr." ,   ";
	
  echo "qidans=".$storeArray[$c-1]." ";
	//echo "difficulty=".$difficulty[$c-1]." ||";
	if($storeArray[$c-1]==$rr)
	{$finalresult+=$difficulty[$c-1];
		$correct++;
	}
	else
		$incorrect++;

	}
	
	

$c++;	
}


//echo '<br>';
}
$per=round(($correct/32)*100,2);
echo "<html>";
echo "<br><b>CORRECT: " .$correct."</b>";
echo "<br><b>INCORRECT: " .$incorrect."</b>";
  echo "<br><b>UNANSWERED: " .$unanswered."</b>";  
	
	  echo "<br><b>FINAL MARKS:  "  .$finalresult."</b>";
	  
	   echo "<br><b>CORRECT PERCENTAGE:  "  .$per."%</b>";
	   echo "</html>";
	?>
	
	
	
	
<!----------------------------------------------------------------------------------------------------->	


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
	
	var cor="<?php echo $correct; ?>";
	var incor="<?php echo $incorrect; ?>";
	var unans="<?php echo $unanswered; ?>";
     // alert(cor+", "+incor+", "+unans); 
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
//alert(total);
    // calculate percentage and set tooltip value
    tooltipEl.innerHTML = '<h1>' + (value / total * 100).toFixed(2)+ '%</h1>';
  }

  // calculate position of tooltip
  var centerX = (this._chartInstance.chartArea.left + this._chartInstance.chartArea.right) / 2;
  var centerY = ((this._chartInstance.chartArea.top + this._chartInstance.chartArea.bottom) / 1.2);

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
      data: [parseInt(cor),parseInt(incor),parseInt(unans)],
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

	<!---------------------------------------------------------------------------------------------------->
	
	
	
	
	
	
	
	
	
	
	
	
	