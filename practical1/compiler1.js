<html>

<script src="jq.js"></script>
   <link src="gviz_tooltip.css" rel="stylesheet">


    <script type="text/javascript" src="jsapi.js"></script>

    <script type="text/javascript" src="uds_api_contents.js"></script>
<script>
var arr=[];
function call(){
	var id=document.getElementById("t").value;
	//alert("going");
	$.ajax({
		url:"res.php",
		method:"POST",
		data:{id:id},
		dataType:"JSON",
		success:function(data){
			
			for(i in data){
				arr[i]=JSON.parse(data[1]);
			}
			//console.log(data);
			//console.log(data[1]);
			
			//dt=JSON.parse(data[1]);
			console.log(arr);
			console.log(arr[1]);
			console.log(arr[1][0]);
		}
	})
}

      function drawChart() {

	   
        var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      [arr[0][0], arr[0][0]],
      [arr[1][0], arr[1][0]],
      [arr[2][0], arr[2][0]],
      [arr[3][0], arr[3][0]]
     

    ]);
	 
        var options = {
          title: 'My Daily Activities' ,
		  is3D:true,
        };

         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

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

</script>
<form>
<input type="text" id="t">
</form>

<p onclick="call()" style="cursor:pointer">Click</p>
 <div  id="piechart" style="width: 900px; height: 500px;"></div>
</html>