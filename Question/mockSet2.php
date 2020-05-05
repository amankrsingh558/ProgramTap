<!DOCTYPE html>
<html>

<?php
session_start();
$ins=0;
if(isset($_SESSION['isinsert']))
$ins=$_SESSION['isinsert'];

?>
<script>
var tti=5;
function isinserted(){
	document.getElementById("inserted").style="display:none";
}
function style1(x){
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
}
function insertName(){
	
}
function checkk(){
	q=document.getElementById("qqq").value;
	a=document.getElementById("aop").value;
	b=document.getElementById("bop").value;
	c=document.getElementById("cop").value;
	d=document.getElementById("dop").value;

	if(q==""){
		alert("The Question field cannot be blank");
		return false;
	}
		if((a.length < 1)||(b.length < 1)||(c.length < 1)||(d.length < 1)){
		alert("The Option field cannot be blank");
		return false;
	}
}
function go(){
	window.location.href='adminQues.php';
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
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body onload="setTimeout(isinserted, 2000)">
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
			<li><a href="/ProgramTap/Question/examName.php"><em class="fa fa-calendar">&nbsp;</em> Exam Schedule</a></li>
			<li class="active"><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
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
				<li class="active">Exams</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mock </h1>
			</div>
		</div><!--/.row-->
		
  <!---    To Start  -->
<span id="inserted" style="color:green; font-size:20px"> <?php if($ins==1){ echo "previous question inserted";} $_SESSION['isinsert']=0; ?> </span>


 <div id="mainwrapper" class="container" style="width: 100%;">
 	
<form name="ansopt" action="insertmock.php" method="post" onsubmit="return checkk()">
<div class="form-group">
<label>Enter Question</label>
 <textarea class="form-control" id="qqq" name="ta" rows="3" cols="60" placeholder="Enter Question here"></textarea><br><br>
</div>
<div class="form-group" id="main-div" style="width: 100%;min-height:250px;">
<div id="left-div" class="form-group" style="width: 30%;float: left;margin-left: 20px;">

	<label>Enter Options</label>
   <input class="form-control" id="aop" class="opt" type="text" name="op1" placeholder="Enter Option 1">
   <input class="form-control" id="bop" class="opt" type="text" name="op2" placeholder="Enter Option 2">
   <input class="form-control" id="cop" class="opt" type="text" name="op3" placeholder="Enter Option 3">
   <input class="form-control" id="dop" class="opt" type="text" name="op4" placeholder="Enter Option 4">
</div> 
<diV id="right-div" style="width: 30%;margin-left: 50%;">
 <input type="hidden" name="si" value='<?php echo $_SESSION['ename'] ?>'>
  <div class="form-group">
   <span  class="opt"><label>Select answer</label></span> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="opt form-control" name="ans">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
   </select>
</div>
   <div class="form-group">
   <span  class="opt"><label>Select Concept</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="opt form-control" name="conc">
              <option value="cb">Basic C</option>
              <option value="dm">Decision Making</option>
              <option value="lo">Loops</option>
              <option value="fs">functions And Scope</option>
   </select>
</div>
   <div class="form-group">
      <span  class="opt"><label>Dificulty of Questions</label></span>&nbsp;&nbsp;<select class="opt form-control" name="dif">
              <option value="1">Easy</option>
              <option value="2">Medium</option>
              <option value="3">Hard</option>
   </select>
</div>
</div>
</div>
   <input id="btn"
   class="btn btn-success" type="submit" value="insert Question">


</div>




		
	</div>	<!--/.main-->
	
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