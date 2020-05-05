<!DOCTYPE html>
<html>
<style>


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
	color:#99ccff;
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
session_start();
$eid=$_SESSION['eid'];
include_once('theConnection.php');
 $qin="UPDATE `exam` SET ready=1 where eid='$eid'";
   $val=$con->query($qin);
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
function check(){
	var a=document.getElementById('pcde').value;
	var b=document.getElementById('pcdee').value;
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
			<li><a href="indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li class="active"><a href="examName.php"><em class="fa fa-calendar">&nbsp;</em> Exam Schedule</a></li>
			<li><a href="AdminStudent.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			<li><a href="/ProgramTap/ad/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
			<li><a href="AddQues.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
			<li class="parent ">
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Exam Schedule>> <span style="background-color:#ebebe0; text-decoration:underline;font-size:40px"    name="ssn" ><?php echo $_SESSION['ename'];?></span></h1>
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

<form action="updateS_examtable.php" name="mform" method="post" >
<table border="3">
<tr>
<td> Set Date </td> <td> <input style="width:100%" placeholder="Enter date yyyy-mm-dd" type="date" onkeyup="callget(this)" class="gg" id="pcde" name="date"> </td>
</tr><tr>
<td> Set Duration </td> <td> <input  placeholder="Duration of exam in minutes" onkeyup="callget(this)" class="gg" type="number" id="pcdee" name="dur" > </td>
</tr>
<tr>
<td colspan="2"><br>
<input style="margin-left:100px" class="button" type="button" id="bbb" onclick="check()" value="Schedule Exam" ><br><br>
</td>
</tr>
</table>
</form>

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