



<html>
<link rel="stylesheet" type="text/css" href="/ProgramTap/Exam/DT/css/jquery.dataTables.min.css">  
<style>

#piechart:hover, .tbl:hover, #t:hover{
	
	cursor:pointer;
}

#piechart{
	margin-left:400px;
	margin-left:400px;
	margin-top:20px;
	width: 600px;
	height: 300px;
	padding:0px;
}




</style>
<link src="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
   <link src="gviz_tooltip.css" rel="stylesheet">
    <script src="jq.js"></script>
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript" src="uds_api_contents.js"></script>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
            
            <!-- Popper.JS -->
            <script src="/ProgramTap/HEADER/js2/popper.min.js"></script>
            <!-- Bootstrap JS -->
            
             <script type="text/javascript" src="/ProgramTap/Exam/DT/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/ProgramTap/Exam/DT/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
     $(document).ready(function() {
       $('#tbl').DataTable();
     } );
   </script>
	<style>
	.student_details{
		list-style-type:none;
		padding:0;
		margin:0;
		font-weight:bold;
	}
	li{
		float:left;
		padding-left:20px;
	}
	.concept{
		padding:8px;
		background-color:#555;
		color:white;
		border:1px solid black;
	}
	.concept:hover{
		background-color:lightgreen;
		color:black;
	}
	</style>
  <head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	
	<link href="css/styless.css" rel="stylesheet">
  <link href="prof1.css" rel="stylesheet" id="bootstrap-css">
<script src="prof2.js"></script>
<script src="prof3.js"></script>

   <?php 
   
   
  
         include_once("theConnection.php");
       //$qq="CS160058";
	   
	  $qq=$_POST['roll'];
	  $uid=$qq;
	  $qry="SELECT SI, uid, uname,branch, year, email FROM `user` WHERE uid='$qq' ORDER BY SI";
   $val=$con->query($qry);
   $row = $val->fetch_row();
   
   $e="select DISTINCT eid from s_exam where eid in (select eid from s_exam where uid='$uid' and s_status=1)";
   $ee=$con->query($e);
   ?>
  
<div class="container-fluid">
<ul class="student_details" ><li>Name :  <?php echo   "$row[2]"?></li>
 <li>Roll :  <?php echo   "$row[1]"?></li>
<li>Branch :  <?php echo   "$row[3]"?></li>
 <li>Year :  <?php echo   "$row[4]"?></li>
 <li>
 
 <input type="button" value="Reset Password " onclick="change()" class="btn btn-success" /> 
 
  </li>
		</ul>
</div>



<script>
function change(){
	
	var uid1="<?php echo $qq; ?>";
$.ajax({  
                url:"changepass.php",  
                method:"POST",  
                data:{uid:uid1},
				success: function (val) {

				
         alert("Password Changed Successfully!");
                
				}
           }); 
}
		   
</script>


<div style=" width:100%; ">
<!--    div outer    -->
       <!--    div inner1    -->
	   <div class="inner1"  style=" width:100%;">
	   <table  id="tbl" class="table table-bordered table-header table-responsive" style="width:80%; margin-left:10%; margin-top:2%">
       			<thead style="background:#2a3471;color:#fff;">
                        <tr>
       			
       			<th style="text-align: center">Exam Name</th>
       			<th style="text-align: center">Date</th>
       			<th style="text-align: center">Total Marks</th>
       			<th style="text-align: center">Obtained Marks</th>
       			<th style="text-align: center">Action</th>
       		</tr>
	      </thead>
	  
	<?php
		while($ree = mysqli_fetch_array($ee)){
			
			
			
			
			
	      $eid=$ree[0];

	
   $q="select count(*) from mcq where eid='$eid'";
   $v=$con->query($q);
   $r = mysqli_fetch_array($v);
   $n=$r[0]*2;

   $qb="select * from exam where eid='$eid'";
   $vb=$con->query($qb);
   $rb = mysqli_fetch_array($vb);
   
   
    $qry="SELECT  `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, 
	`res8`, `qid9`, `res9`, `qid10`, `res10` FROM `s_exam` WHERE uid='$uid' and eid='$eid' and s_status=1";
   $val=$con->query($qry);
   $row = mysqli_fetch_array($val);

   $indcol=0;
   $index=0;
   $total=0;
   $marks=0;
  while($indcol<$n){
	   
	  
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  
		  
		  $marks=$marks+$val;
	   
	   $indcol+=2;
   }
   
   
   ?>
         	<tr>
			  <td style="text-align: center; display:none"><?php  echo "$rb[1]"; ?></td>
			  <td style="text-align: center"><?php  echo "$rb[2]"; ?></td>
			  <td style="text-align: center"><?php  echo "$rb[3]"; ?></td>
			  <td style="text-align: center"><?php  echo "$total"; ?></td>
			  <td style="text-align: center"><?php  echo "$marks"; ?></td>
			  <td onclick="show(this)" style="text-align: center"><a class="btn btn-primary" href="#fff"> Exam Stats</a></td>
			</tr>
		<?php
		
		
		}
		
		
		
		
		
		
		
		
   function isright($b,$i,$con){
	   $u=0;
	   $tqry="select ans,dif from mcq where qid='$b'";
	  $vall=$con->query($tqry);
	  $rw = mysqli_fetch_array($vall);
	  
	  $eid=$GLOBALS['eid'];
	  $tqryc="select easy,medium,difficult from exam where eid='$eid'";
	  $vallc=$con->query($tqryc);
	  $rwc = mysqli_fetch_array($vallc);
	  
	  if($rw[1]==1)
		  $u=$rwc[0];
	  else if($rw[1]==2)
		  $u=$rwc[1];
	  else if($rw[1]==3)
		  $u=$rwc[2];
	  
	  $GLOBALS['total']=$GLOBALS['total']+$u;
	  if($rw[0]==$i){
		  return $u;
	  }
	  else{
		  return 0;
	  }
   }
	
  ?>			
       		</table>
		</div>	
		<!--    div inner 1 Close    -->
		<!--    div inner     -->



  <div class="inner2" style=" width:100%;">
      
			
	<div class="panel panel-default" style="width:100%;">
					<div class="panel-heading">
						Students Performance in last 5 exams
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body" >
						<div id="chart_div" style="height:200px">  </div>
									<table style="cursor:pointer;margin-left:30px;" class="tbl" id="lst">
<tr> 
<td onclick="first()" id="hl" class="concept">Total</td>        <!-- Add Concepts Here and pass the name  -->
<td onclick="fetchh('cb',this);" class="concept">C Basic </td>        <!-- Add Concepts Here and pass the name  -->
<td onclick="fetchh('lo',this);" class="concept">Loop </td> 
<td onclick="fetchh('ar',this);" class="concept">Array </td> 
<td onclick="fetchh('dm',this);" class="concept">Decision making </td> 
<td onclick="fetchh('fs',this);" class="concept">Function and Scope </td> 
<td onclick="fetchh('po',this);" class="concept">Pointers </td> 
<td onclick="fetchh('st',this);" class="concept">Strings </td> 
<td onclick="fetchh('su',this);" class="concept">Structure</td> 
<td onclick="fetchh('pm',this);" class="concept">Preprocessor </td> 
<td onclick="fetchh('rc',this);" class="concept">Recurssion </td> 
<td onclick="fetchh('fh',this);" class="concept">File Handling </td> 
<td onclick="fetchh('mm',this);" class="concept">Memory Management</td> 
</tr>
</table>
					</div>
				</div>
			
            



		</div>
		<!--    div inner 2 close    -->
	<!--    div outer close   -->
   </div>    
	   
	   
        <div class="fb-profile-text" id="fff">
          <span>  
		  			<span style="margin-top:10px;font-weight:bold;font-size:30px;">
					

			</span><br>
			
           
			<center><span id="t">  </span></center>
            </span>
			<div  style="margin-left:30px" id="piechart"></div>   
        </div>
    </div>
</div> <!-- /container -->  


 </head>
 <body style="background-color:white">

  


















  <body onload="first()">
       <!--  <div id="chart_div"></div>  -->
    
  </body>
   <link src="gviz_tooltip.css" rel="stylesheet">

<script src="jq.js"></script>
    <script type="text/javascript" src="jsapi.js"></script>

    <script type="text/javascript" src="uds_api_contents.js"></script>

  

    <script type="text/javascript">
	var d=[];
	var dex=[];
    var roll='<?php echo "$qq"; ?>';
	
		function show(k){
		document.getElementById('fff').style="display:show";
		var ttbb=document.getElementById('tbl');
		
		var t=k.parentElement.rowIndex;
		fetchExam(ttbb.rows[t].cells[0].innerHTML);
		
	}
	
	function ConceptFromExam(yy){
	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("t").innerHTML = this.responseText;
            }
        };
		
             xmlhttp.open("GET", "ConceptFromExam.php?eid="+yy+"&uid="+roll, true);
		xmlhttp.send();
}

	function fetchExam(yy){
		
		
		
		var vv=yy.toString();
		ConceptFromExam(vv);
			$.ajax({
		url:"ress.php",
		method:"POST",
		data: {
        'roll': roll,
        'eid': vv
    },
		dataType:"JSON",
		success:function(da){
			for(i in da)
			dex[i]=da[i];
			//drawChart();
			
			for(i in d)
				console.log(i+"  da - "+dex[i]);
			drawChart1(-1);
		}
	})
	}
	
	function drawChart1(choice) {
		  if(choice==-1){                                                       // *****************
        var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
       [dex[2],parseInt(100*dex[1]/(dex[0]+dex[1]))],
       [dex[5],parseInt(100*dex[4]/(dex[3]+dex[4]))],
       [dex[8],parseInt(100*dex[7]/(dex[6]+dex[7]))],
       [dex[11],parseInt(100*dex[10]/(dex[9]+dex[10]))],
       [dex[14],parseInt(100*dex[13]/(dex[12]+dex[13]))],
       [dex[17],parseInt(100*dex[16]/(dex[15]+dex[16]))],
       [dex[20],parseInt(100*dex[19]/(dex[18]+dex[19]))],               // OverAll Exam result   
       [dex[23],parseInt(100*dex[22]/(dex[21]+dex[22]))],
       [dex[26],parseInt(100*dex[25]/(dex[24]+dex[25]))],
       [dex[29],parseInt(100*dex[28]/(dex[27]+dex[28]))],
       [dex[32],parseInt(100*dex[31]/(dex[30]+dex[31]))],
       [dex[35],parseInt(100*dex[34]/(dex[33]+dex[34]))],
       [dex[38],parseInt(100*dex[37]/(dex[36]+dex[37]))]
    ]);
        var options = {
          title: 'Exam Wise' ,
		  is3D:true,
        };
	   }
	                                                                            // ************************
																				
	   else {
		     var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
		   ["Right",parseInt(dex[choice+1])],
           ["Wrong",parseInt(dex[choice])]
	   
	      ]);
        var options = {
          title: dex[choice+2] ,
		  is3D:true,
        };
	   }
         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    function selectHandler() {
      var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
		gotit(topping);
      }
    }
    google.visualization.events.addListener(chart, 'select', selectHandler);
    chart.draw(data, options);   
      }                 
	
	function first(){
		
		var y=document.getElementById("lst");
		for(var i=1;i<13;i++){
			y.rows[0].cells[i].style="background-color:#555;color:white;";
			
		}
		document.getElementById("hl").style="background-color:orange;color:white;";
	$.ajax({
		url:"whole.php",
		method:"POST",
		data:{roll:roll},
		dataType:"JSON",
		success:function(da){
			for(i in da)
			d[i]=da[i];
			drawChart(d);
		}
	})
	}
	
      function drawChart(p) {
		  
		                                                         // *****************
        var data = google.visualization.arrayToDataTable
            ([['X', 'Marks'],
              [p[0], parseInt(p[1])],
              [p[3], parseInt(p[4])],
              [p[6], parseInt(p[7])],
              [p[9], parseInt(p[10])],
              [p[12], parseInt(p[13])]
        ]);

        var options = {
          legend: 'none',
          colors: ['black'],
          pointSize: 10,
          pointShape: { type: 'triangle', rotation: 0 }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options); 
      }
	  
	  
	  
	  
	  var dc=[];
	       function fetchh(conid,o){
			   
			   		var y=document.getElementById("lst");
		for(var i=0;i<13;i++){
			y.rows[0].cells[i].style="background-color:#555;color:white;";
			
		}
		o.style="background-color:orange;color:white;";
			   
			   $.ajax({
	    url:"wholeConcept.php",
		method:"POST",
		data: {
        'roll': roll,
        'conid': conid
    },
		dataType:"JSON",
		success:function(da){
			
		
			for(i in da)
			dc[i]=da[i];
			drawChart(dc);
			
			for(i in dc)
				console.log(i+"  dc - "+dc[i]);
			
		}
		})
		   }
    </script>
<script src="sweetalert.js"></script>
	</body>
	</html>