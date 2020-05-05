<?php
include './include/db.php';
$id=$_GET['eid'];
$ne=$_GET['ne'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>PogramTap</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style2.css">
  <link href="vendor/font-awesome.min.css" rel="stylesheet">


  <link rel="stylesheet" href="chosen.css">

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- Font Awesome JS -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

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
          	<li><a href="/ProgramTap/Question/indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li><a href="/ProgramTap/Question/examName.php"><em class="fa fa-calendar">&nbsp;</em> Exam Schedule</a></li>
			<li class="active"><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
			<li><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
			<li><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			<li><a href="/ProgramTap/Question/AdminStudent.php"><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
			<li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			<li class="parent ">
            </li>
           
          </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content" style="margin-top: 80px;">




         <!--PageContent--->
         <div class="container-fluid" style="position: fixed;">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-default" style="margin-left: -90px;color:black;margin-top: -92px;position: relative;max-height: 30px;z-index: 1;">
              <i class="glyphicon glyphicon-transfer"></i>

            </button>
          </div>

          <div class="row" style="margin-top: -70px!important;margin-left: -80px;">
            <ol class="breadcrumb">
              <li><a href="#" style="padding-left: 50px;color: #45aeff;">
                <em class="fa fa-home"></em>
              </a></li>
              <li class="active">Question Bank</li>
            </ol>
          </div><!--/.row-->

          <div class="row" style="width: 250%;margin-left: -73px;position: fixed;margin-top: -20px;">

            <div class="col-lg-12" style="background: #f1f4f7;padding-top: 20px;padding-left: 20px;">
              <h1 class="page-header">Question Bank</h1>
            </div>
          </div>


        </div>
        <div class="container-fluid" style="margin-top: 60px;margin-left: -42px;margin-right:42px;background: #fff;min-height: 1000px;width: 107%;">

          <div class="container" style="background: #eee;width: 70%;margin-top: 80px;margin-left: 100px;font-size: 24px; border-radius: 4px;">   

            <?php
            $ename;
            $noq;
            $rem;
            $sql = 'select * from exam where eid=:id';
            $stmt = $db->prepare($sql);

            $stmt->bindparam(":id",$id);
            

            $stmt->execute();
            if($stmt->rowCount()>0){

              while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $ename=$row['ename'];
                $noq=$row['noq'];
                $rem=$noq-$ne;
              }
                      		  
            }
            ?>
            <label>Exam Name:&nbsp;&nbsp;<?php
            echo $ename;
            ?>
          </label>
        </div> 
        <div class="container" style="width: 70%;margin-top: 40px;margin-left: 100px;font-size: 24px; border-radius: 4px;">
          <h4>Total Number of questions:&nbsp;&nbsp;<?php
          echo $noq;
          ?>
        </h4>
        <h4>Number of questions entered:&nbsp;&nbsp;<?php
        echo $ne;
        ?>
      </h4>
      <h4>Number of questions to remaining:&nbsp;&nbsp;<?php
      echo $rem;
      ?>
    </h4>


    <div style="padding: 20px;width: 100%;"></div>

    <h4  class=form-control">Select Exam</h4> 

    <form action="/ProgramTap/Question/copy.php" method="get" onsubmit="return validateForm()" name="fcopy">



      <div>

        <select data-placeholder="Choose an Exam..." name="val2" class="chosen-select" tabindex="2" style="width: 300px;">
          <option value=""></option>
          <?php

          $stmt2=$db->prepare("SELECT * from exam");
          
          $stmt2->execute();
          if($stmt2->rowCount()>0){

            while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){

              echo "<option value='". $row['eid'] ."'>" .$row['ename'] ."</option>";
            }
          }

          ?>

        </select>
      </div>
      
      <h4>No of questions to copy:</h4><input id="num" name="num" type="number" min="1" />
      <input type="hidden" name="val1" value="<?php echo $id;?>">
      
      

      <input type="submit" class="btn btn-default" name="submit" value="submit">

      <script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
      <script src="chosen.jquery.js" type="text/javascript"></script>
      <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
      <script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
        function validateForm() {
        var x = document.forms["fcopy"]["val2"].value;
        var y = document.forms["fcopy"]["num"].value;
        var z = '<?php echo $rem;?>';
      if (x == "") {
           alert("Exam must be selected");
        return false;
     }
     else if(y == ""){
       alert("Number of questions must be entered");
        return false;
     }
	 y=y*1;
	 z=z*1;
	 alert(y+" --- "+z);
     if(y>z){
      alert("Number of questions < <?php echo "$rem";?>");
        return false;
     }
	 else{
		 return true;
	 }

  }
      </script>
    </form>




  </div>
</div>
</div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

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
<script type="text/javascript">
  $(document).ready(function () {
    alert("working");
  }
</script>
</body>

</html>