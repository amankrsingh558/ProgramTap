<!DOCTYPE html>
<html>

<?php
session_start();
include_once("theConnection.php");
$rs=$_GET['r']*1;
if(isset($_GET['val'])){
$ename=$_GET['val'];
//$ename='two';

  $q="select eid from exam where ename='$ename'";
  $vl=$con->query($q);
  $ro = $vl->fetch_row();
  $eid=$ro[0];
  $_SESSION['eid']='$eid';
  $_SESSION['ename']='$ename';
  echo "<h1> if $eid   and   $ename </h1>";
}
else {
	$eid=$_SESSION['eid'];
	 $q="select ename from exam where eid='$eid'";
  $vl=$con->query($q);
  $ro = $vl->fetch_row();
  $ename=$ro[0];
  $_SESSION['ename']='$ename';
    echo "<h1> else $eid   and   $ename </h1>";
}
$_SESSION['eid']=$eid;
?>

<h1> <?php  echo $ename; ?> </h1>
<script>
/*function style1(x){
	if(x==1){
		document.getElementById("one").style="font-size:40px;background-color:blue";
		document.getElementById("two").style="font-size:24px;background-color:#993366";
		document.getElementById("fm").style="display:block";
		document.getElementById("bumb").style="display:none";
		document.getElementById("opt").style="display:inline";
	}
	else if(x==2){
		document.getElementById("one").style="font-size:24px;background-color:blue";
		document.getElementById("two").style="font-size:40px;background-color:#993366";
		document.getElementById("fm").style="display:none";
		document.getElementById("bumb").style="display:block";
		document.getElementById("opt").style="display:none";
		
	}
}*/
function check(){
	var a=document.getElementById('pcde').value;
	var b=document.getElementById('pcdee').value;
	
	var ctr=0;
	
	for(var q=0;q<4;q++){
		if(document.getElementsByClassName('child1')[q].checked== true){
			ctr=1;
		}
	}
	 for(var q=0;q<7;q++){
		if(document.getElementsByClassName('child2')[q].checked== true){
			ctr=1;
		}
	}
	if(ctr==0){
		alert('Please select a year or branch');
		return false;
	}
	
	if(a.length<1){
		alert("Date cannot be empty");
		return false;
	}
	else if(b.length<1){
		alert("Duration cannot be empty");
       return false;
	}
		if(confirm('Confirm, Schedule exam?'))
			document.mform.submit();
		
	
}
</script>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Program tap</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<script src="js/jquery-1.11.1.min.js"></script>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav  style="background: #999999;opacity: 0.8; height:70px;" class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
	     <span> <img src="logo.png" style="height:75px; width:230px" ></span>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="admin.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Root</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
<ul class="nav menu">
			<li><a href="/ProgramTap/Question/indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li class="active"><a href="/ProgramTap/Question/examName.php"><em class="fa fa-calendar">&nbsp;</em> Exam Schedule</a></li>
			<li><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
			<li><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
			<li><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			<li><a href="/ProgramTap/Question/AdminStudent.php"><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
			<li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
		
			
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="indexadmin.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Schedule Exams</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<!--<h1 class="page-header">Schedule Exam >> <span style="background-color:#ebebe0; text-decoration:underline;font-size:40px"    name="ssn" ></span></h1>-->
				<center><h2>Schedule Exam</h2></center>
			</div>
		</div><!--/.row-->
		
<center>   <!---    To Start  



 <div align="center" id="mainwrapper"><br><br>
<br><br>
<form action="insertScheduleExamDate.php" method="post" >
   <input placeholder="Enter date yyyy-mm-dd" type="date" onkeyup="callget(this)" class="gg" id="pcde" name="date">
   <input placeholder="Duration of exam in minutes" onkeyup="callget(this)" class="gg" type="number" name="dur" >
   <br><sup style="color:red;margin-left:220;" id="msg"></sup>
 <br><br><br>
   <input class="button" type="submit" id="bbb" value="Schedule Exam" >
   <h1>Update s_exam table
</form>
</div>   -->
 <div class="container">
<form action="updateS_examtable.php" method="post" name="mform">
<table class="table table-bordered table-responsive">
<tr>
<td> Exam Name </td> <td> Set Date </td> <td> Set Duration </td> <td> Year </td><td> Branch </td><td>Action</td>
<tr>
<td> <B style="font-size:18px;"><?php echo $ename;?></B></td>

<td> <input  placeholder="Enter date yyyy-mm-dd" style="font-size:18px;color:black;"  type="date" onkeyup="callget(this)" class="gg" id="pcde" name="date"> </td>

 <td> <input id="pcdee" placeholder="Duration of exam" style="font-size:18px;color:black;" onkeyup="callget(this)" class="gg" type="number" name="dur" > </td>
  <input type="hidden" name="r" value="<?php echo $rs; ?>" > 
 
 
  <td > <!--<select id="pcdee" placeholder="Year" style="font-size:18px;color:black;" onkeyup="callget(this)" class="gg"  name="dur" > 
  
  
  
  </select>-->
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <label><input type="checkbox" name="allyear" class="allyear" id="parent1"/>All Years</label>

<div id="checkboxlist">

    <label><input type="checkbox" value="1st" name="year[]" class="child1" />1st</label>
    <label><input type="checkbox" value="2nd" name="year[]" class="child1"/>2nd</label>
    <label><input type="checkbox"  value="3rd"  name="year[]" class="child1"/>3rd</label>
    <label><input type="checkbox" value="4th" name="year[]" class="child1"/>4th</label>

</div>
  
  </td>

   <td> 
  
 <label><input type="checkbox" name="allbranch"  id="parent2"  class="allbranch"/>All Branch</label>

<div id="checkboxlist1">

    <label><input type="checkbox" value="CS" name="branch[]" class="child2"/>CS</label>
    <label><input type="checkbox" value="IT" name="branch[]" class="child2"/>IT</label>
    <label><input type="checkbox"  value="ET"  name="branch[]" class="child2"/>ET</label>
    <label><input type="checkbox" value="EE" name="branch[]" class="child2"/>EE</label>
<label><input type="checkbox" value="ME" name="branch[]" class="child2"/>ME</label>
<label><input type="checkbox" value="CE" name="branch[]" class="child2"/>CE</label>
<label><input type="checkbox" value="CH" name="branch[]" class="child2"/>CH</label>

</div>



   </td>

 
 


  <script>
  
  $(function(){
  $('#parent1').on('change',function(){
     $('.child1').prop('checked',$(this).prop('checked'));
  });
 
});






var numberOfChildCheckBoxes = $('.child1').length;

$('.child1').change(function() {
  var checkedChildCheckBox = $('.child1:checked').length;
  if (checkedChildCheckBox == numberOfChildCheckBoxes)
    $("#parent1").prop('checked', true);
  else
    $("#parent1").prop('checked', false);
});





//////////////////////////////////////////////////////////////////

  
  $(function(){
  $('#parent2').on('change',function(){
     $('.child2').prop('checked',$(this).prop('checked'));
  });
 
});


var numberOfChildCheckBoxes2 = $('.child2').length;

$('.child2').change(function() {
  var checkedChildCheckBox2 = $('.child2:checked').length;
  if (checkedChildCheckBox2 == numberOfChildCheckBoxes2)
    $("#parent2").prop('checked', true);
  else
    $("#parent2").prop('checked', false);
});





</script>
</script>
 </script>
 
 
 
 
 <td>
<input  class="btn btn-success" type="button" id="bbb" value="Schedule Exam" onclick="check();">
</td>
</tr>

</table>
</form>

</center>
		
	</div>	<!--/.main-->
	
	<!--<div class="container">
		
		<a href="AdminNewExam.php" class="btn btn-info">
          &nbsp; Add Exams
        </a>

       </div>
       <div class="clearfix"></div></br>

       <div class="container">
       		<table class="table table-bordered table-responsive">
       			<tr>
       			
       			<th style="text-align: center">Exam ID</th>
       			<th style="text-align: center">Date</th>
       			<th style="text-align: center">Duration</th>
       			<th style="text-align: center">No of Ques.</th>
       			
       			<th style="text-align: center">Status</th>
       			<th style="text-align: center" colspan="5">More Action</th>
       		</tr>
       		
       		<?php
       		/*$query="select * from exam";*/
       	//	$query="select DISTINCT e.eid,e.date,e.noq,e.duration,se.e_status from exam e join s_exam se ON (e.eid = se.eid)";
       		//$crud->examview($query);
       		?>
       		
       		</table>
       </div>

	
	
	
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
</body>
</html>