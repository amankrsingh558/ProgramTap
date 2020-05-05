<!DOCTYPE html>
<html>

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

if($_GET['ad']==1){
$eid=$_GET['val'];
 $q="select ename from exam where eid='$eid'";
  $vl=$con->query($q);
  $ro = $vl->fetch_row();
  $ename=$ro[0];
}

else if($_GET['ad']==0){
  $ename=$_GET['val'];
  $q="select eid from exam where ename='$ename'";
  $vl=$con->query($q);
  $ro = $vl->fetch_row();
  $eid=$ro[0];
}
$_SESSION['eid']=$eid;

?>

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

      <body onload="flex()">
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
            <li ><a href="/ProgramTap/Exam/AdminExams.php" ><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
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
              <li class="active"><a href="/ProgramTap/Exam/Questions.php">Question Bank</a>&nbsp;/&nbsp;View Questions</li>
            </ol>
          </div><!--/.row-->

        </div>
          <div class="row" style="width: 250%;margin-left: -73px;margin-top: -20px;z-index: -1;">

            <div class="col-lg-12" style="background: #f1f4f7;padding-top: 20px;padding-left: 40px;">
              <h2 class="page-header"><?php echo "<h1>$ename</h1>"; ?></h2>
            </div>
          </div>

<!------Content--->
        <div class="container-fluid" style="margin-top: 5px;margin-left: -42px;margin-right:42px;background: #fff;min-height: 450px;width: 107%;z-index: -1;color: #000;">
          

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
   //             0    1  2 2 3   4   5   6
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
  <?php   $n=$row[5];
    $n=$n*1;  ?>
    <tr><td colspan="4"> The answer is : &nbsp;&nbsp;&nbsp;<input name="ans[]" class="aa" type="text" value='<?php
        echo "$row[5] ";  ?>' >
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