<html>

<style>

#piechart:hover{
	
	cursor:pointer;
}
</style>
  <head>
   
<?php
  include_once("theConnection.php");
   echo "Amit";
   $qry="select * from one";
   $val=$con->query($qry);
   $arr=$val->fetch_array(MYSQLI_NUM);
?>
   <link src="gviz_tooltip.css" rel="stylesheet">


    <script type="text/javascript" src="jsapi.js"></script>

    <script type="text/javascript" src="uds_api_contents.js"></script>

  

    <script type="text/javascript">
      function drawChart() {

	   
        var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($val->num_rows > 0){
          while($row = $val->fetch_assoc()){
            echo "['".$row['concept']."', ".$row['marks']."],";
          }
      }
      ?>
    ]);
	 
        var options = {
          title: 'Concept Wise' ,
		  is3D:true,
        };

         var chart = new google.visualization.PieChart(document.getElementById('data1'));//*******************

    function selectHandler() {
      var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        //alert('The user selected ' + topping);
		gotit(topping);
      }
    }

    google.visualization.events.addListener(chart, 'select', selectHandler);
    chart.draw(data, options); 
      }
	  
	  
	  
	  
	       function drawChart2() {

	   <?php
	   $qry="select * from one";
   $val=$con->query($qry);
   $arr=$val->fetch_array(MYSQLI_NUM);
	   ?>
        var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($val->num_rows > 0){
          while($row = $val->fetch_assoc()){
            echo "['".$row['concept']."', ".$row['marks']."],";
          }
      }
      ?>
    ]);
	 
        var options = {
          title: 'Concept Wise' ,
		  is3D:true,
        };

         var chart = new google.visualization.PieChart(document.getElementById('data2'));//*******************

    function selectHandler() {
      var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        //alert('The user selected ' + topping);
		gotit(topping);
      }
    }

    google.visualization.events.addListener(chart, 'select', selectHandler);
    chart.draw(data, options);
      } 
	   function drawChart3() {

	   <?php
	   $qry="select * from one";
   $val=$con->query($qry);
   $arr=$val->fetch_array(MYSQLI_NUM);
	   ?>
        var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($val->num_rows > 0){
          while($row = $val->fetch_assoc()){
            echo "['".$row['concept']."', ".$row['marks']."],";
          }
      }
      ?>
    ]);
	 
        var options = {
          title: 'Concept Wise' ,
		  is3D:true,
        };

         var chart = new google.visualization.PieChart(document.getElementById('data3'));//*******************

    function selectHandler() {
      var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        //alert('The user selected ' + topping);
		gotit(topping);
      }
    }

    google.visualization.events.addListener(chart, 'select', selectHandler);
    chart.draw(data, options);
      } 
	  
	  function gotit(x){
		if(x=='Pointer')
			window.location="https://en.wikipedia.org/wiki/Pointer";
		else if(x=='File')
			window.location="https://en.wikipedia.org/wiki/File";
		else if(x=='Data')
			window.location="https://en.wikipedia.org/wiki/Data";
		else if(x=='functions')
			window.location="https://en.wikipedia.org/wiki/functions";
		else
			window.location="https://en.wikipedia.org/wiki/Operators";
	  }
	   google.setOnLoadCallback(drawChart);
	      google.setOnLoadCallback(drawChart2);  
	      google.setOnLoadCallback(drawChart3);  
    </script>
  </head>
  <?php
  /*while($row = $val->fetch_row()){  
	   echo "<h1>$row[0]</h1> <h3> $row[1] </h3><br>";
        			
   }*/
   /*	   $val->data_seek(1);
   print_r($val->fetch_row()); 
  echo "<hr>";
      	   $val->data_seek(2);
   print_r($val->fetch_row()); 
   echo "<hr>";
    $val->data_seek(2);
   print_r($val->fetch_row()); 
   echo "<hr>";*/
   
?>
  <body>
    <table border="1"><tr><td id="data1"> </td><td id="data2"> </td><td id="data3"> </td></tr></table>
  </body>
</html>