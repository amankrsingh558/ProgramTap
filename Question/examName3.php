<!DOCTYPE html>
<html>
<style>


.sid{
	text-align:center;
	border:0px;
	color:green;
	width:200px;
	font-size:30px;
	font-weight:bold;
}
.opt{
	padding:5px;
	margin:5px;
	border-radius:20px;
}
.answr{
		cursor: pointer;
  height: 50px;
  width: 900px;
  border-radius: 30%;
  font-size:20px;
  font-weight:bold;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  height:50px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#span{
	font-size:30px;
	color:blue;
}
.rem{
	margin-left:150px;
	color:orange;
	font-size:20px;
}



.demo { 
    
    height:75px;
    line-height: 60px;
    font-family: "Century Gothic", "Helvetica", sans-serif;
    font-size: 90px;
    font-weight: bold;
    text-align: center;
    margin-left: 60px; 
    margin-right: 60px; 
}
.demo1 { 
    color: #111;
    text-shadow: 0px 3px 1px rgba(255,255,255,.5); 
}
#pcde, .gg{
    font-family: "Century Gothic", "Helvetica", sans-serif;
    font-size: 30px;
    font-weight: bold;
    text-align: center; 
	color:green;
	border:0px;
	background-color:#e3ebe0;
	padding:0px;
}
.vw{
    font-family: "Century Gothic", "Helvetica", sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-align: center; 
	color:black;
	border:0px;
	background-color:#e3ebe0;
}
	 #mainwrapper{
width:480px;
height:380px;
margin: 0 auto;
background:white;
padding: 5px;
border-radius:10px;

background-color:#f1f4f7;
}
.button, .span{
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.span{
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
::placeholder { 
    color: blue;
    opacity: 0.3; 
	font-size:25px;
}
.v{
	width:50px;
}
#one{
	font-size:40px;
}
</style>
<?php
include_once('theConnection.php');
/*
session_start();
//$eid=$_SESSION['eid'];
$eid='e0001';
include_once("theConnection.php");
$number1="SELECT count(*) from mcq where eid='$eid'";
$number2="SELECT noq from exam where eid='$eid'";
$v1=$con->query($number1);
$v2=$con->query($number2);
$n1 = $v1->fetch_row();
$n2 = $v2->fetch_row();
if($n1[0]>=$n2[0]){
	header('Location: schedulexam2.php');
}
*/
?>
<script>
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
			<li ><a href="/ProgramTap/Question/indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
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
				<li class="active">Exam Schedule</li>
			</ol>
		</div><!--/.row-->
		
		<!--/.row-->
		
<center>   <!---    To Start  -->

		<script>
		
		
		
		
		
		window.onload=function(){
			
			type1();
		}

	
	function type1(){
		//document.write("hello");
		var x=document.getElementById("select").value;
    var req=new XMLHttpRequest();
    req.open("post","exam_name_filter.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("type="+x);
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	//document.write(req.responseText);
    //compiler();
     
  document.getElementById("filter").innerHTML=req.responseText;
 
 // document.write(req.responseText);
	
	
	 }
		
		
	  	 
	 
	}
	}	
	

</script>

<CENTER><B style="font-size:18px;">EXAM LIST<B></CENTER>
	<div class="container" style="margin-left:-425px;">
			<a href="/ProgramTap/Exam/createExam.php"><input type="button" value="New Exam" class="btn btn-primary"></a>
			<select id="select" onchange="type1()" style="border-radius:5px;padding:5px;" >
	<option value="e" style="border-radius:5px;padding:5px;">Theory</option>
	<option value="p" style="border-radius:5px;padding:5px;">Practical</option>
	</select>
       </div>


		
		


			
<div id="filter"></div>
			
	
       		

</body>

<script>
var k=0;
function fetch(u,v){
	    k=u.parentNode.parentNode.cells[0].textContent.toString();
	window.location.replace('schedulexam2.php?val='+k+'&r='+v);
}
function add(u){
	if(u.substring(0,1)=='p'){
		window.location.replace('/ProgramTap/Question/practical_exam_question.php?val='+u);
	}
	else
	window.location.replace('addNewSet.php?val='+u);
}

</script>



</center>
		
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