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
.qq:active, .aa:active, .op:active, .oo:active{
	color:aqua;
}
.qq{
	text-align:left;
	font-size:20px;
	color:#123434;
	background-color:transparent;
	border:0px;
	
}

.oo{
	text-align:left;
	font-size:20px;
	color:#123434;
	background-color:transparent;
	border:0px;
	
}
.op{
	font-size:15px;
	color:#262673;
	font-weight:bold;
	background-color:transparent;
	border:0px;
}
.aa{
	font-size:20px;
	color:green;
	background-color:transparent;
	border:0px;
}
#sid{
	text-align:center;
	color:green;
	width:500px;
	font-size:30px;
	font-weight:bold;
}

.vac{
	height:7px;
	border-top:2px solid black;
}
th{
	border-bottom:2px solid black;
	padding-bottom:3px;
}
</style>
<?php
session_start();

//$ename='two';
include_once("theConnection.php");

if($_GET['ad']==1)
$eid=$_GET['val'];

else if($_GET['ad']==0){
	$ename=$_GET['val'];
  $q="select eid from exam where ename='$ename'";
  $vl=$con->query($q);
  $ro = $vl->fetch_row();
  $eid=$ro[0];
}
$_SESSION['eid']=$eid;
?>

<script>

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
<body onload="flex()">
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
				<li class="active">View Questions</li>
			</ol>
		</div><!--/.row-->
		
		<!--/.row-->
	
<script>
function flex(){
	for(var i=0;i<<?php echo 10; ?>;i++){
	var tex = document.getElementsByClassName("oo"); 
	var text=tex[i].value;
	
var lines = text.split("\n");
var count = lines.length;
tex[i].rows=count;

	}
}
</script>
	
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

<?php include_once('theConnection.php'); 

  
  // $qry="select 0-Question,1-option1,2-option2,3-option3,4-option4,5-answer,6-Qnumber from qa where SessionId ='$hdd' ORDER BY Qnumber";
   $qry="select ques,opt1,opt2,opt3,opt4,ans,dif,qid from mcq where eid ='$eid'";
   //             0    1	2	2	3	  4	  5   6
   $val=$con->query($qry);
   
   
$number1="SELECT count(*) from mcq where eid='$eid'";
$number2="SELECT noq from exam where eid='$eid'";
$v1=$con->query($number1);
$v2=$con->query($number2);
$n1 = $v1->fetch_row();
$n2 = $v2->fetch_row();
?>
 Click on the field to edit 
 <?php 
 $_SESSION['noqq']=$n1;
 
  $rem=$n2[0]-$n1[0];
  if($rem==0){?>
	 <span style="background-color: #66ff99" class="rem">  All Questions Entered</span>
  <?php }
  else { ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="background-color: #ffff99" class="rem">
*<?php echo "$rem" ?> Questions remaining to enter</span><br>
<a href="addNewSet.php" ><button class="btn btn-success" type="button" >Enter Remaining Questions</button></a>
  <?php  } ?>
  
<form action="update.php" method="post">
<table >
<?php
$kl=1;
  while($row = $val->fetch_row()){   ?>
  <input type="hidden" value='<?php echo "$row[7]" ?>' name="qid[]">
    <tr>  
	   <td  colspan="4" class="qq"><textarea  cols="80" rows="1" name="ques[]" class="oo" type="text" ><?php echo " $row[0]"; ?></textarea> </td>
	   </tr><tr>
        <td>A. <input name="aopt[]" class="op" type="text" value='<?php echo "$row[1]" ?>'></td> <td> B. <input name="bopt[]" class="op" type="text" value='<?php  echo "$row[2]";?>'> </td>   
        <td>C. <input name="copt[]" class="op" type="text" value='<?php echo "$row[3]" ?>'></td> <td>D.  <input name="dopt[]" class="op" type="text" value='<?php  echo "$row[4]";?>'> </td>   
</tr>		
	<?php 	$n=$row[5];
		$n=$n*1;  ?>
		<tr><td colspan="4"> The answer is : &nbsp;&nbsp;&nbsp;<input name="ans[]" class="aa" type="text" value='<?php
        echo "$row[5] ";	?>' >
		</td>
     </tr>
	 <tr><td colspan="4" class="vac"></td> </tr> 
<?php		
$kl=$kl+1;
   }
if($n1[0]>0)   {
?>
<tr><td style="text-align:center" colspan=4" >
<input class="btn btn-success" type="submit" value="UPDATE DATABASE"></td></tr>

<?php } ?>
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