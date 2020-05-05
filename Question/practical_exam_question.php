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
	
	
	
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="exam.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<style>
		.btn2 {
  display: inline-block;
  padding: 10px 20px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #330066;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}

.btn2:hover {
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}

.btn2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
     </style>
</head>


<?php
session_start();
$course_id="c";
if(isset($_GET['val'])){
	$exam_id=$_GET['val'];
	$_SESSION['val']=$exam_id;
}
$exam_id=$_SESSION['val'];

//$_SESSION['examid1']=$exam_id
$_SESSION['file']='practical'.'/'.$course_id.'/exam/'.$exam_id.'/questions/';
?>

<body>
	<nav  style="background-color: #999999;opacity: 0.8; height:70px;" class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
	     <span> <img src="logo.png" style="height:75px; width:230px" ></span>
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid">
	<div class="row">
	                 
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
	
		
	<div class="col-sm-9 col-lg-10">
	<br>
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="indexadmin.php">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">PRACTICAL EXAM QUESTION</li>
				</ol>

			</div><!--/.row--->


	<form action="/ProgramTap/abhi/practical_exam_file.php" method="post">
	 <div class="row">
		<div class="col-sm-12" style="background:linear-gradient(to bottom,#663300 0%, #999999 100%);color:white;font-weight:bold;height:300px;">
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

	  <div class="row" style="background:linear-gradient(to bottom,#003d99 0%, #5c8a8a 100%);">
		<div class="col-sm-6" style="background:linear-gradient(to bottom,#003d99 0%, #5c8a8a 100%);color:white;font-weight:bold;">
		 <div class="form-group">
		<label for="exampleFormControlTextarea1"><h4>Input Format</h4></label>
		<textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6" name="samplein1"></textarea>
	  </div>
		</div>
		
		<div class="col-sm-6" style="background:linear-gradient(to bottom,  #003d99 0%, #5c8a8a 100%);color:white;font-weight:bold;">  
		  <div class="form-group">
		<label for="exampleFormControlTextarea1"><h4>Output Format</h4></label>
		<textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6"name="sampleout1"></textarea>
	  </div>    
		</div>
	  </div>
	  
	  <div class="row" style="background:linear-gradient(to bottom, #003d99 0%, #5c8a8a 100%);">
		<div class="col-sm-6" style="background:linear-gradient(to bottom, #003d99 0%, #5c8a8a 100%);color:white;font-weight:bold;">
		  
		 <div class="form-group" >
	<label for="exampleFormControlTextarea1" ><h4>Sample Input 1</h4></label>
		<textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein1"></textarea>
	  </div>
	  <div class="form-group">
	   <label for="exampleFormControlTextarea1" ><h4>Sample Input 2</h4></label>
		<textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein2"></textarea>
	  </div>
		</div>
		
		<div class="col-sm-6" style="background:linear-gradient(to bottom, #003d99 0%, #5c8a8a 100%);color:white;font-weight:bold;">  
		  <div class="form-group">
		<label for="exampleFormControlTextarea1" ><h4>Sample Output 1</h4></label>
		<textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3"name="sampleout1"></textarea>
	  </div>  
		  <div class="form-group">
		<label for="exampleFormControlTextarea1" ><h4>Sample Output 2</h4></label>
		<textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3"name="sampleout2"></textarea>
	  </div>  
	  
		</div>
		
	  </div>


	 <div class="row"  style="background:linear-gradient(to right, #595959 0%, #595959 100%);">
		<div class="col-sm-6" style="background:linear-gradient(to bottom,#595959 0%, #595959 100%);color:white;font-weight:bold;">
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
		
		<div class="col-sm-6" style="background:linear-gradient(to bottom,#595959 0%, #595959 100%);color:white;font-weight:bold;"> 
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
		
		
	  </div>
	  <BR>
	  <BR>
	   <center><input type="submit" class="btn2" id="next" value="Next"></center>
		<br>
		<br>
	</div>

	</form>

			
		</div>	<!--/.main-->
		
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