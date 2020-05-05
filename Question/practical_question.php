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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><#ProgramTap></title>

  <!-- Bootstrap CSS CDN -->
  <link href="/ProgramTap/HEADER/css/bootstrap.min.css" rel="stylesheet">
  <link href="/ProgramTap/HEADER/css/font-awesome.min.css" rel="stylesheet">
  
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
<?php
session_start();
$course_id="c";

$_SESSION['file']='practical'.'/'.$course_id.'/mock/questions/';
?>


      </head>

      <body onload="setTimeout(isinserted, 2000)">
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
              <li class="active"><a href="/ProgramTap/Exam/Questions.php">Question Bank</a>&nbsp;/&nbsp;Mock Set </li>
            </ol>
          </div><!--/.row-->

        </div>
          <div class="row" style="width: 250%;margin-left: -73px;margin-top: -20px;z-index: -1;">

            <div class="col-lg-12" style="background: #f1f4f7;padding-top: 20px;padding-left: 40px;">
              <h2 class="page-header">Practical Questions </h2>
            </div>
          </div>


        <div class="container-fluid" style="margin-top: 5px;margin-left: -42px;margin-right:42px;background: #fff;min-height: 450px;width: 107%;z-index: -1;color: #fff;">
        
              <form action="/ProgramTap/abhi/practicalfile.php" method="post">
<div class="container-fluid"> 
  <br>
 <div class="row">
    <div class="col-sm-12" style="background:linear-gradient(to bottom,#aaea82 0%, #999999 100%);color:white;font-weight:bold;height:295px;">
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
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#aaea82 0%, #999999 100%);color:white;font-weight:bold;">
     <div class="form-group">
    <label for="exampleFormControlTextarea1"><h4>Input Format</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6" name="samplein1"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom, #aaea82 0%, #999999 100%);color:white;font-weight:bold;">  
      <div class="form-group">
    <label for="exampleFormControlTextarea1"><h4>Output Format</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6"name="sampleout1"></textarea>
  </div>    
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#aaea82 0%, #999999 100%);color:white;font-weight:bold;">
    
     <div class="form-group" >
<label for="exampleFormControlTextarea1" ><h4>Sample Input 1</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein1"></textarea>
  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1" ><h4>Sample Input 2</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein2"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#aaea82 0%, #999999 100%);color:white;font-weight:bold;">  
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


 <div class="row"  style="background:linear-gradient(to right,#aaea82 0%, #ff99cc 100%);">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#aaea82 0%, #999999 100%);color:white;font-weight:bold;">
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
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#aaea82 0%, #999999 100%);color:white;font-weight:bold;"> 
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
  <center><input type="submit" class="btn btn-primary" id="next" value="Next">
  <input type="submit" class="btn btn-success" id="submit"></center>
  </div>
  
   
</div>

</form>


                </div> 
              </div>
            </div>

            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="/ProgramTap/HEADER/js2/jquery.slim.min.js"></script>
            <!-- Popper.JS -->
            <script src="/ProgramTap/HEADER/js2/popper.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="/ProgramTap/HEADER/js2/bootstrap.min.js"></script>
            <!-- jQuery Custom Scroller CDN -->
            
            <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
   <link src="gviz_tooltip.css" rel="stylesheet">
    <script src="jq.js"></script>
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript" src="uds_api_contents.js"></script>
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