<!DOCTYPE html>
<html>
<style>
.clearfix{
	padding-top: 20px;
}

</style>

<?php session_start(); $_SESSION['isinsert']=0; ?>
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
</script>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Program tap</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="DT/css/jquery.dataTables.min.css">
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
			<li><a href="/ProgramTap/Question/indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li  class="active"><a href="/ProgramTap/Question/examName.php"><em class="fa fa-calendar">&nbsp;</em> Exam Schedule</a></li>
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
				<li class="active">Question bank</li>
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
<div class="clearfix"></div>
<div class="container">
<div class="sete" style="float: right;margin-right: 40px;padding: 5px;">
<button class="btn btn-primary" onclick="openPage('Home', this,0)" id="defaultOpen">EXAM</button>
<button class="btn btn-primary" onclick="openPage('News', this,1)" id="mock">MOCK</button>
<button class="btn btn-warning" onclick="openPage('vqq', this,2)" id="vq">View Questions</button>
</div>
</div>
<div class="clearfix"></div>
<div class="clearfix"></div>

<div id="Home" class="tabcontent">
<form id="fm" action="insertExam.php" method="post" >
     

     <div class="form-group col-lg-2" style="padding-top: 25px;">
    <select class="form-control form-control-lg" style="background-color:#fff" name="ggod" >
      <option value="t">Theory</option>
      <option value="p">Practical</option>
    </select>
  </div>

  	<div class="form group col-lg-2" style="padding-top: 25px;">
  	<input placeholder="Enter Exam Name" onkeyup="callget(this)" style="background-color:#fff" class="gg form-control" id="pcde" name="ename">
  </div>

  <div class="form-group col-lg-3" style="padding-top: 25px;">
    <input placeholder="Number of Questions" onkeyup="callget(this)" style="background-color:#fff" class="gg form-control" type="number" name="noq" > 
    </div>

     <div class="form-group col-lg-5" > 
    <label>Difficulty wise marks distribution</label>
    <div style="display: grid;grid-template-columns: 30% 30% 30%">
	<div><input name="easy" id="pcde" value="1" class="v form-control" type="text"></div>
	<div><input name="medium" id="pcde" value="2" class="v form-control"  type="text"></div>
	<div><input name="hard" id="pcde" value="3" class="v form-control" type="text"></div>
	</div>

	</div>


	<input  class="btn btn-success" type="submit" id="bbb" value="Add Questions" style="float: right;margin-right: 70px;">
	 
 </form>
</div>

<div id="News" class="tabcontent">
	<center>
		<div class="clearfix"></div>
<div class="clearfix"></div>
  <form action="mockSet.php">

  <input  class="btn btn-success" type="submit" id="bbb" value="Add Questions" >
  </form>
  </center>
</div>

<div id="vqq" class="tabcontent">

  <?php include_once("theConnection.php");?>
 		   <table class="table table-bordered table-responsive"  id="tble" >
 		   	<tr><th>The Exam list by Name </th></tr>

	<?php
	$qrryy="select ename from exam";
	$getval=$con->query($qrryy);
	$p=0;
	  while($roww = $getval->fetch_row()){  
       if($p%1==0){	   ?>
	   
        <tr>
		
	   <?php  } ?>
	     <td  onclick="cchange(this)" name="col" ><?php echo "$roww[0]"; ?></td>
	   <?php
	  $p=$p+1;
} 
?>
</tr>
<tr><td align="center">
<input onclick="fetch()" id="bt" style="cursor:pointer;" class="btn btn-primary" value="View Questions">
</td>
</tr>

</table>
  
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
    <script type="text/javascript" src="DT/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="DT/js/dataTables.bootstrap4.min.js"></script>

       <script type="text/javascript">
             $(document).ready(function() {
             $('#tble').DataTable();
             } );
       </script>
	<script>
	function openPage(pageName,elmnt,color,k) {
    var i, tabcontent, tablinks;
	if(k==1){
		document.getElementById("mock").style="color:black";
	}
	else{
		document.getElementById("mock").style="color:white"
	}
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
	

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
	
var k=0;
function format(){
	var t=document.getElementById('tble');
	for(var i=1;i<t.rows.length;i++){
			for(var j=0;j<t.rows[i].cells.length;j++){
				t.rows[i].cells[j].style="background-color:#fff;";

			}
	}
}
function cchange(u){
	format();
	u.style="background-color:#aaea82";
    k=u.textContent.toString();
}
function fetch(){
	if(k==0){
	 alert('please select an exam');
	 return;
	}
	
	window.location.replace('viewQuestions.php?val='+k+'&ad=0');
}

	</script>
</body>
</html>