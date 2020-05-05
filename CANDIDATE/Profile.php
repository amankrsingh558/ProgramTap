<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location:/ProgramTap/index.php');
}
?>

<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->forgetPassword( $_POST );
			//if($data)$_SESSION['success'] = PASSWORD_RESET_SUCCESS;
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	}
?>




<?php
error_reporting(E_ALL ^ E_NOTICE);
$_SESSION['MCQSTATS']=0;
$uid=$_SESSION['uid'];

?>


<script src="highchart.js"></script>
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
    <script src="highchart.js"></script>
    <style>
        a:hover{
            text-decoration: none;
        }
		table{
			font-size:20px;
			
			display:inline-block;
		}
		
    </style>
</head>
<body>
    <nav  class="navbar navbar-custom navbar-fixed-top" role="navigation" style="opacity: 0.8%;background-color: #999999">
        <div class="container-fluid">
         <span> <img src="side-7.png" style="height:60px; width:160px" ></span>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="pro.png" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php if($_SESSION['logged_in']) { ?>
				<?php echo $_SESSION['uname']; }?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href="/ProgramTap/CANDIDATE/index.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
            <li  class="active"><a href="/ProgramTap/CANDIDATE/Profile.php"><i class="fa fa-user" aria-hidden="true">&nbsp;</i> Profile</a></li>    
            <li><a href="/ProgramTap/CANDIDATE/Result.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
            <li><a href="/ProgramTap/home.php"><em class="fa fa-toggle-off">&nbsp;</em> Exams</a></li>
            <li><a href="/ProgramTap/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
               <a href="/ProgramTap/CANDIDATE/index.php"><li class="active">Home</a><span>/Profile</span></li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Profile</h1>
            </div>
        </div><!--/.row-->

	
	<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12 no-padding" style="height: 550px">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><img src="pro.png" style="display:inline-block;height:200px;width=200px;border-radius:90px">
							<div class="large"></div>
							
							<?php include_once("theCon.php");  ?>
   <table>
        <?php 
        $q="select * from user where uid='$uid'"; $val=$con->query($q); 
         while($row = $val->fetch_row()){   ?>
        <tr><th><br>Name:<br></th><td><br><?php  echo $row[2];?><br></td></tr>
        <tr><th><br>RollNo:<br></th><td><br><?php  echo $row[1];?><br></td></tr>
        <tr><th><br>Branch:<br></th><td><br><?php  echo $row[3];?><br></td></tr>
		<tr><th><br>Year:<br></th><td><br><?php  echo $row[4];?><br></td></tr>
		<tr><th><br>Email:<br></th><td><br><?php  echo $row[5];?><br></td></tr>
    <?php }?>
    </table>
	
	
	<br><br>
	<!-- <input type="hidden"   value="<?php echo $_SESSION['uid']; ?>">
		 <input type="text" style="display:none" id="txtBox" />-->
		 <br>
		 <input type="button" id="btn1" value="Change password" />
		 
		 
		 
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="forgetpassword-form" method="post"  class="form-register" role="form">
				
				 <input type="hidden"  name="uid" value="<?php echo $_SESSION['uid']; ?>">
					<!--<input id="email" name="email" type="email" class="form-control" placeholder="Email address">  -->
					 <input type="text"  name="pass" style="display:none" id="txtBox"  required />
				<input type="submit" id="btn2" style="display:none" value="Submit"/>
				<!--<button id="forget_btn" class="btn btn-block bt-login" type="submit">Reset Password</button>-->
			</form>
		
	
	
	
	
						</div>
					</div>
				</div>
				
	</div>
	
	
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
    
	
<script src="sweetalert.js"></script>
    
	<script>
	
	    $('#btn1').click(function(){
 $('#txtBox').show();
  $('#btn2').show();
   $('#btn1').hide();
});

		    $('#btn2').click(function(){
				
				
				var inp = $("#txtBox").val();
if(jQuery.trim(inp).length > 0)
{
   $('#txtBox').hide();
  $('#btn1').show();
   $('#btn2').hide();
  // swal("Password Successfully Changed", "", "success");
}

else
{
	swal("Please Enter New Password", "", "error");
}


				
 
});
	
	
	
	</script>
	
	
</body>
</html>