<html>

<link rel="stylesheet" href="adminstudent.css">
<link rel="stylesheet" type="text/css" href="/ProgramTap/Exam/DT/css/jquery.dataTables.min.css">  

<script src="adminstudentscript.js"></script>
<meta name="viewport" content="width=device-width, initial scale=1">
<body  onload="again()">



<div>
<div class="dropdown" style="margin-left:780px;margin-top:10px;display:inline-block">
<button onclick="myFunction()"  onblur="disp(0,this)" id="cd" class="dropbtn" style="position:relative;left:30px;height:45px;">Search Student &darr; </button>
  <div id="myDropdown"  class="dropdown-content">
 
    <input type="text" onblur="disp(0,this)" placeholder="Enter Roll Number..." id="myInput" onkeyup="filterFunction()">
    <?php
include_once("theConnection.php");
    $qryy="SELECT uid from user" ;
   $vall=$con->query($qryy);
   while($roww = mysqli_fetch_array($vall)){
	?>
	    <a style="cursor:pointer" onclick="disp(1,this)"><?php echo $roww[0]; ?></a>
   <?php } ?>
  
  </div>
</div>
<div style="display:inline-block">
<button class="btnprof" id="bf" style="margin-left:150px;" onclick="prof()" >Visit Profile</button>
</div>


<div class="tab" style="display:inline-block;margin-left:10px;">
  <button class="tablinks"  id="all" onclick="openCity(event, 'London'),again()">All Student List</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Branch Wise</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Year Wise</button>
</div>

</div>
<div id="London" class="tabcontent">
</div>

<div id="Paris" class="tabcontent">
  <table id="customers"><tr onclick="got(1,this, event)">  <td>CSE</td><td>IT</td><td>Civil</td><td>Electrical</td><td>Mechanical</td><td>Applied</td> </tr></table>
</div>

<div id="Tokyo" class="tabcontent">
  <table id="customers"><tr onclick="got(2,this, event)">  <td>1st</td><td>2nd</td><td>3rd</td><td>4th</td></tr></table>
</div>






<?php

  


	  $qry="SELECT SI, uid, uname,branch, year, email FROM `user` WHERE 1 ORDER BY SI";
   $val=$con->query($qry);
   
   
function getBranch($rw){
	 $br=substr($rw,0,2); 
	              if($br=="CS"){
					  return "CSE";
				  }
				  else if($br=="IT"){
					 return "IT";
				  }
}

function getYear($rw){
	 $br=substr($rw,2,2); 
	 $br=$br*1;
	 return 2000+$br;            
}
?>
<table  id="tble" >

</table>

</form>
<form method="post" action="charttest.php" id="submitForm">
<input type="hidden" id="regToSend" name="roll" >             <!-- Changed  --> 
</form>

<h1 style="margin-left:30px" id="t"></h1><br><br>
<button style="position:relative;left:580px;bottom:50px;background-color:#0099ff;" onclick="dec()" class="buttonn"><span>Previous</span></button>
<button style="position:relative;left:590px;bottom:50px;background-color:#0099ff;" onclick="inc()" class="button"><span>Next </span></button>
 <script type="text/javascript" src="/ProgramTap/Exam/DT/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/ProgramTap/Exam/DT/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
     $(document).ready(function() {
       $('#tble').DataTable();
     } );
   </script>
</body>
</html>
