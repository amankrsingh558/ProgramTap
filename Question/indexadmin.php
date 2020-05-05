<!DOCTYPE html>
<html>

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

	<nav  style="background: #2c3e50; height:70px;" class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
			<li class="active"><a href="/ProgramTap/Question/indexadmin.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li><a href="/ProgramTap/Question/examName.php"><em class="fa fa-calendar">&nbsp;</em>Schedule Exam</a></li>
			<li><a href="/ProgramTap/Exam/Questions.php"><em class="fa fa-clone">&nbsp;</em> Question Bank</a></li>
			<li><a href="/ProgramTap/Exam/AdminExams.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
			<li><a href="/ProgramTap/Question/ResultExam.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			<li><a href="/ProgramTap/Question/AdminStudent.php"><em class="fa fa-buysellads custom">&nbsp;</em> Manage Students</a></li>
			<li><a href="/ProgramTap/index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
			
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="margin-top: 5px;">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Home</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-blue" background="admin"></em>
							<div class="large"><?php 
                        include_once("theConnection.php");      
						$q="select count(*) from user"; $val=$con->query($q);  $row = mysqli_fetch_array($val); echo $row[0];
							?></div>
							<div class="text-muted">Total Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-orange"></em>
							<div class="large">
						<?php	$q="select count(*) from exam where duration>0"; $val=$con->query($q);  $row = mysqli_fetch_array($val); echo $row[0];  ?>
							</div>
							<div class="text-muted">Upcoming Exams</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">
							<?php	$q="select count(*) from exam"; $val=$con->query($q);  $row = mysqli_fetch_array($val); echo $row[0];  ?>
							</div>
							<div class="text-muted">Total Exam</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
							<div class="large">
							<?php	$q="select count(*) from mcq"; $val=$con->query($q);  $row = mysqli_fetch_array($val); echo $row[0];  ?>
							</div>
							<div class="text-muted">Questions in Question Bank</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row" >
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Students registered for last 5 Exams
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body" id="chart_div">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
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
	<script>
	var dex=[];
   window.onload = function () {
			$.ajax({
		url:"adminress.php",
		method:"POST",
		dataType:"JSON",
		success:function(da){
			for(i in da)
			dex[i]=da[i];
			for(i in dex)
				console.log(i+"  da - "+dex[i]);
			drawChart();
		}
	})
}
      function drawChart() {                                            // *****************
        var data = google.visualization.arrayToDataTable
        ([['X', 'Marks'],
       [dex[0],parseInt(dex[1])],
       [dex[2],parseInt(dex[3])],
       [dex[4],parseInt(dex[5])],
       [dex[6],parseInt(dex[7])],
       [dex[8],parseInt(dex[9])]
    ]);

        var options = {
          legend: 'none',
          colors: ['#000099'],
          pointSize: 30,
          pointShape: { type: 'triangle', rotation: 0 }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options); 
      }
	</script>
</body>
</html>