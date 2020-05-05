<!DOCTYPE html>
<html>

<style type="text/css">
	@media (max-width: 400px) {
		#main-div{
			width: 400px;
		}


		#left-div{
			width: 200px;
			float: left;
		}
		#right-div{
			width: 100%;
			

		}

	}

</style>

<?php
session_start();
if(isset($_GET['val']))
$eid=$_GET['val'];
else if(isset($_SESSION['eid']))
$eid=$_SESSION['eid'];
include_once("theConnection.php");
$number1="SELECT count(*) from mcq where eid='$eid'";
$number2="SELECT noq from exam where eid='$eid'";
$v1=$con->query($number1);
$v2=$con->query($number2);
$n1 = $v1->fetch_row();
$n2 = $v2->fetch_row();


$en="SELECT ename from exam where eid='$eid'";
$en1=$con->query($en);
$en2 = $en1->fetch_row();
$ename=$en2[0];

if($n1[0]>=$n2[0]){
	header('Location: schedulexam2.php?val='.$ename.'&r=0');
}

$_SESSION['eid']=$eid;
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
	 <!-- Bootstrap CSS CDN -->
  <link href="/ProgramTap/HEADER/css/bootstrap.min.css" rel="stylesheet">
  <link href="/ProgramTap/HEADER/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="/ProgramTap/HEADER/style2.css">
  

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="/ProgramTap/HEADER/css2/jquery.mCustomScrollbar.min.css">

  <!-- Font Awesome JS -->
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  

  <style type="text/css">
  .profile-userpic img {
    float: left;
    margin: 10px 0px 0px 15px;
    width: 50px;
    height: 50px;
    border-radius: 9999px !important; }

    .profile-usertitle {
      float: left;

      text-align: left;
      margin: 10px 0 0 12px; }

      .profile-usertitle-name {
        font-size: 20px;
        margin-bottom: 0px;
        color: #fff; }

        .profile-usertitle-status {
          text-transform: uppercase;
          color: #8f8f8f;
          font-size: 12px;
          font-weight: 600;
          margin-bottom: 15px; }

          #sidebar{
            margin-top: 70px;background: #fff;opacity: 0.9;color: black;width: 230px;
          }


        </style>

</head>
<body>
	 <div class="container-fluid" style="width: 100%;height: 70px;background: #2c3e50;opacity: 1;color: white;border-bottom: 0.5px solid white;position: fixed;z-index: 1;">	

          <a href="#"><img class="logo" src="img-head/side-7.png" style="width:230px;height: 70px;"></a>

        </div>
        <div class="wrapper">
          <!-- Sidebar  -->
          <nav id="sidebar">


            <ul class="list-unstyled components">


              <li class="sidebar-brand" style="height: 40px;font-size: 18px;line-height: 30px;margin-top: -20px;">
               <div class="profile-userpic">
                <img src="img-head/admin.jpg" class="img-responsive" alt="">
              </div>
              <div class="profile-usertitle">
                <div class="profile-usertitle-name" style="color: black;font-size: 22px;">Root</div>
                <div class="profile-usertitle-status" style="opacity: 1;line-height: 20px;"><span class="indicator label-success" style="width: 10px;height: 10px; display: inline-block;border-radius: 9999px; margin-right: 5px;background: #85e843;"></span>Online</div>
              </div>
            </li>
            <li style="padding-top: 20px;"><hr></li>


            <li ><a href="/ProgramTap/Question/indexadmin.php" ><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
            <li ><a href="/ProgramTap/Question/examName.php" ><em class="fa fa-calendar">&nbsp;</em> Schedule Exam</a></li>
            <li class="active"><a href="/ProgramTap/Exam/Questions.php" style="padding: 15px;background: #30a5ff;font-size: 15px;font-weight: 300;"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
            <li><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
            <li><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
            <li><a href="/ProgramTap/Question/AdminStudent.php"><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
            <li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>


          </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content" style="margin-top: 80px;">




         <!--PageContent--->
         <div class="container-fluid" style="position: fixed;z-index: 1;">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-default" style="margin-left: -90px;color:black;margin-top: -92px;position: relative;max-height: 30px;z-index: 1;">
              <i class="glyphicon glyphicon-transfer"></i>

            </button>
          </div>

          <div class="row" style="margin-top: -70px!important;margin-left: -80px;width: 200%; position: fixed;">
            <ol class="breadcrumb">
              <li><a href="#" style="padding-left: 50px;color: #45aeff;">
                <em class="fa fa-home"></em>
              </a></li>
              <li class="active"><a href="/ProgramTap/Exam/Questions.php">Question Bank</a></li>
            </ol>
          </div><!--/.row-->

        </div>
          <div class="row" style="width: 250%;margin-left: -73px;margin-top: -20px;z-index: -1;">

            <div class="col-lg-12" style="background: #f1f4f7;padding-top: 20px;padding-left: 40px;">
              <h2 class="page-header"><?php echo $ename; ?></h2>
            </div>
          </div>


        <div class="container-fluid" style="margin-top: 5px;margin-left: -42px;margin-right:42px;background: #fff;min-height: 450px;width: 107%;z-index: -1;color: #000;">
		
<center>   <!---    To Start  -->



<div id="mainwrapper" class="container" style="width: 100%;">
 
<form name="ansopt" action="insertMCQ.php" method="post" onsubmit="return checkk()">
<span class="rem" style="padding-bottom: 10px;">*
 <?php 
  $rem=$n2[0]-$n1[0];
echo "$rem" ?> Questions remaining to enter</span><br>
<span id="span" style="float: left;">
    <?php 
	$n1[0]+=1;
	   echo "Q.";
	   echo $n1[0];
	?>  </span>

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
 <input type="hidden" name="si" value='<?php echo $ename ?>'>
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
</form>

</div>



</center>
		
	</div>	<!--/.main-->
	 </div> 
              </div>
            </div>

            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="/ProgramTap/HEADER/js2/jquery.slim.min.js"></script>
            <!-- Popper.JS -->
            <script src="/ProgramTap/HEADER/js2/popper.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="/ProgramTap/HEADER/js2/bootstrap.min.js"></script>
            
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
   <link src="gviz_tooltip.css" rel="stylesheet">
    <script src="jq.js"></script>
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript" src="uds_api_contents.js"></script>
    <!-- jQuery Custom Scroller CDN -->
            <script src="/ProgramTap/HEADER/js2/jquery.mCustomScrollbar.concat.min.js"></script>

            <script type="text/javascript">
              $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                  theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                  $('#sidebar, #content').toggleClass('active');
                  $('.collapse.in').toggleClass('in');
                  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
              });
            </script>
	
</body>
</html>