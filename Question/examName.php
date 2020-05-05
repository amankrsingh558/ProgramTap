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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><#ProgramTap></title>

  <!-- Bootstrap CSS CDN -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="/ProgramTap/HEADER/style2.css">
  <link href="css/datepicker3.css" rel="stylesheet">

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


            <li ><a href="/ProgramTap/Question/indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
            <li class="active"><a href="/ProgramTap/Question/examName.php"  style="padding: 15px;background: #30a5ff;font-size: 15px;font-weight: 300;"><em class="fa fa-calendar">&nbsp;</em> Schedule Exam</a></li>
            <li><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
            <li><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
            <li><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
            <li><a href="/ProgramTap/Question/AdminStudent.php"><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
            <li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>


          </ul>


        </nav>

        <!-- Header -->
        <div id="content" style="margin-top: 80px;">




         
         <div class="container-fluid" style="position: fixed;z-index: 1;">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-default" style="margin-left: -90px;color:black;margin-top: -92px;position: relative;max-height: 30px;z-index: 1;">
              <i class="glyphicon glyphicon-transfer"></i>

            </button>
          </div>

          <div class="row" style="margin-top: -70px!important;margin-left: -80px; width: 1200px;position: fixed;">
            <ol class="breadcrumb">
              <li><a href="/ProgramTap/Question/indexadmin.php" style="padding-left: 50px;color: #45aeff;">
                <em class="fa fa-home"></em>
              </a></li>
              <li class="active">Schedule Exam</li>
            </ol>
          </div><!--/.row-->
          </div>
          <div class="row" style="width: 250%;margin-left: -73px;margin-top: -20px;z-index: -1;">

            <div class="col-lg-12" style="background: #f1f4f7;padding-top: 20px;padding-left: 50px;">
              <h2 class="page-header">Schedule Exam</h2>
            </div>
          </div>


        
        <div class="container-fluid" style="margin-top: 5px;margin-left: -42px;margin-right:42px;background: #fff;min-height: 450px;width: 107%;color: #000;z-index: -1;">
          

          <!----Page Content--->
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
  <div  style="margin-left: 90px;margin-top: 40px;padding-bottom: 30px;">
      <a href="/ProgramTap/Exam/createExam.php"><input type="button" value="New Exam" class="btn btn-primary"></a>
      <select id="select" onchange="type1()" style="border-radius:5px;padding:5px; " >
  <option value="e" style="border-radius:5px;padding:5px;">Theory</option>
  <option value="p" style="border-radius:5px;padding:5px;">Practical</option>
  </select>
       </div>


    
    


      
<div id="filter" style="width: 100%;"></div>
      

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