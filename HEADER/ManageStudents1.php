<!DOCTYPE html>
<html>

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
  

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="/ProgramTap/HEADER/css2/jquery.mCustomScrollbar.min.css">

  <!-- Font Awesome JS -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
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
            <li ><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
            <li ><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
            <li ><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
            <li class="active"><a href="/ProgramTap/Question/AdminStudent.php" style="padding: 15px;background: #30a5ff;font-size: 15px;font-weight: 300;""><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
            <li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>


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

          <div class="row" style="margin-top: -70px!important;margin-left: -80px; width: 1200px;">
            <ol class="breadcrumb">
              <li><a href="/ProgramTap/Question/indexadmin.php" style="padding-left: 50px;color: #45aeff;">
                <em class="fa fa-home"></em>
              </a></li>
              <li class="active">Manage Students</li>
            </ol>
          </div><!--/.row-->

          <div class="row" style="width: 250%;margin-left: -73px;position: fixed;margin-top: -20px;">

            <div class="col-lg-12" style="background: #f1f4f7;padding-top: 20px;padding-left: 20px;">
              <h1 class="page-header">Manage Students</h1>
            </div>
          </div>


        </div>
        <div class="container-fluid" style="margin-top: 60px;margin-left: -42px;margin-right:42px;background: #fff;min-height: 450px;width: 107%;">
          <p>You must delete this line after you add your content</p>

















                <!------------------------------------------------------------------------------


                  PLACE YOUR CONTENT HERE



                  ------------------------------------------------------------------------------------>



















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