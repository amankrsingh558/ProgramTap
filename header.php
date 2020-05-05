


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><#ProgramTap></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" type="text/css" href="header-style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>
    <div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="row">
			<div class="col-lg-1 X">
			<i class="glyphicon glyphicon-align-justify" href="#menu-toggle" id="menu-toggle" style="cursor:pointer;" title="click to open/close Dashboard"></i>
		</div>
		<div class="col-lg-2 Y">
			<div class="navbar-header">
				<a href="#" class="navbar-brand" title="channel name"><img class="logo" src="img-head/side-7.png"></a>
			</div>
			</div>
			</div>
		</div>		
	</div>
<div id="wrapper">
<!--Sidebar-->

	<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   <div class="profile-userpic">
					<img src="img-head/admin.jpg" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['uname'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				</li>
				<li>
					<hr>
				</li>
                <li>
                    <a href="/ProgramTap/CANDIDATE/index.php"><em class="glyphicon glyphicon-home">&nbsp;</em> Home</a>
                </li>
                <li>
                    <a href="/ProgramTap/CANDIDATE/Profile.php" ><em class="glyphicon glyphicon-calendar">&nbsp;</em>Profile</a>
                </li>
                <li>
                    <a href="/ProgramTap/CANDIDATE/Result.php"><em class="glyphicon glyphicon-stats">&nbsp;</em> Results</a>
                </li>
               

                <li><a href="/ProgramTap/logout.php"><em class="glyphicon glyphicon-off">&nbsp;</em> Logout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <!-- /#page-content-wrapper -->
        <!--<div id="page-content-wrapper">
            <div class="container-fluid">
                
                
            </div>
        </div>-->
        
   

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
   
    <!-- Menu Toggle Script -->
   

 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>