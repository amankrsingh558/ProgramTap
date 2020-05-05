<!DOCTYPE html>
<html>
<link rel="stylesheet" href="adminstudent.css">
<script src="adminstudentscript.js"></script>
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
	<nav  style="background-color: #999999;opacity: 0.8; height:70px;" class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
			<li><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
			<li><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
			<li><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			<li  class="active"><a href="/ProgramTap/Question/AdminStudent.php"><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
			<li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="indexadmin.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Results</li>
			</ol>
		</div><!--/.row-->
		
		
		
  <!---    To Start  



 <div  align="center" id="mainwrapper"><br><br>
 <span id="one" onclick="style1(1)" style="background-color:blue" class="span"> Exam  </span>  <span onclick="style1(2)" id="two" style="background-color:#993366" class="span"> Mock </span>
<br><br>
<form id="fm" action="insertExam.php" method="post" >
   <input placeholder="Enter Exam Name" onkeyup="callget(this)" style="background-color:#f1f4f7" class="gg" id="pcde" name="ename">
   <input placeholder="Number of Questions" onkeyup="callget(this)" style="background-color:#f1f4f7" class="gg" type="number" name="noq" >
   <br><br><span name="Pcode" class="vw" style="background-color:#f1f4f7"> DIFFICULTY LEVEL MARKS : <br>Easy <input name="easy" id="pcde" value="1" class="v" type="text" style="background-color:#f1f4f7">Medium <input name="medium" id="pcde" value="2" class="v" style="background-color:#f1f4f7" type="text">Hard <input style="background-color:#f1f4f7" name="hard" id="pcde" value="3"  class="v" type="text">
   </span>
   <br><sup style="color:red;margin-left:220;" id="msg"></sup> <br><br><br>
   <input class="button" type="submit" id="bbb" value="Add Questions" >
</form>
<form action="mockSet.php">
<br><br><br><input class="button" style="display:none" type="submit" id="bumb" value="Add Questions" >
</form>
</div>   -->

<iframe style="height:1100px; width:100%;" src="bb.php"></iframe>









		
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