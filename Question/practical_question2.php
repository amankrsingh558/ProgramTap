<!DOCTYPE html>
<html>
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
<!--/.row-->
		
  <!---    To Start  -->
<?php

$course_id="c";

$_SESSION['file']='practical'.'/'.$course_id.'/mock/questions/';
?>


<head>
	<title>Practical Exam</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="exam.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<form action="practicalfile.php" method="post">
<div class="container-fluid"> 
	<br>
 <div class="row">
    <div class="col-sm-12" style="background:linear-gradient(to bottom,#663300 0%, #999999 100%);color:white;font-weight:bold;height:295px;">
          <center><h3>Question</h3></center>
    <div class="form-group">
	<div class="col-sm-2" style="padding-bottom:15px;">
        
		<select style="color:black;" name="concept" class="form-control">
	<option value="cb">C Basic</option>
	<option value="dm">Decesion Making</option>
	<option value="lo">Loops</option>
	<option value="rc">Recursion</option>
	<option value="fs">Function & scope</option>
	<option value="rc">Arrays</option>
	<option value="po">Pointer</option>
	<option value="st">Strings</option>
	
	
	</select>
	</div>
	
        <textarea spellcheck="false" class="form-control" id="exampleFormControlTextarea1" rows="8" name="question" ></textarea>
        <input type="hidden" value="q4" name="qid" >
	
	</div>
      
    </div>
 </div>
  <div class="row">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #999999 100%);color:white;font-weight:bold;">
     <div class="form-group">
    <label for="exampleFormControlTextarea1"><h4>Input Format</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6" name="samplein1"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom, #663300 0%, #999999 100%);color:white;font-weight:bold;">  
      <div class="form-group">
    <label for="exampleFormControlTextarea1"><h4>Output Format</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6"name="sampleout1"></textarea>
  </div>    
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;">
	  
     <div class="form-group" >
<label for="exampleFormControlTextarea1" ><h4>Sample Input 1</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein1"></textarea>
  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1" ><h4>Sample Input 2</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein1"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;">  
      <div class="form-group">
    <label for="exampleFormControlTextarea1" ><h4>Sample Output 1</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3"name="sampleout1"></textarea>
  </div>  
      <div class="form-group">
    <label for="exampleFormControlTextarea1" ><h4>Sample Output 2</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3"name="sampleout1"></textarea>
  </div>  
  
    </div>
	
  </div>


 <div class="row"  style="background:linear-gradient(to right,#663300 0%, #ff99cc 100%);">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;">
     <br><center><h4>Testcase</h4></center>
    <div class="form-group"><b>1</b>
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input1" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">2
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input2" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">3
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput"  name="input3" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">4
    
    <textarea class="form-control"  spellcheck="false" id="formGroupExampleInput2" name="input4" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">5
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input5" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">6
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input6" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">7
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input7" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">8
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input8" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">9
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input9" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">10
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input10" placeholder="Another input"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;"> 
      <br><center><h4>Answer</h4></center>
      <div class="form-group">1
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output1" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">2
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output2" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">3
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output3" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">4
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output4" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">5
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output5" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">6
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output6" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">7
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output7" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">8
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output8" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">9
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output9" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">10
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output10" placeholder="Another input"></textarea>
  </div>

    </div>
	<center><input type="submit" class="btn2" id="next" value="Next"></center>
	<center><input type="submit" class="btn2" id="submit"></center>
  </div>
  
   
</div>

</form>

	
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