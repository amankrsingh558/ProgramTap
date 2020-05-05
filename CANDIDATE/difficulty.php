



<?php 

ob_start();
session_start();

require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location:/ProgramTap/difficulty.php');
}

$concept=$_GET['concept'];

	

?>



 <?php 
error_reporting(E_ALL ^ E_NOTICE);


	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		

/*$sql="SELECT s_status from s_exam  where  uid='".$_SESSION['uid']."' and e_status=1";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res))
    {
    $sstatus=$row[0];
    }
			
	//echo "<script>alert('$sstatus')</script>";	
	if($sstatus==-1)
		header('location:/ProgramTap/home.php');
	*/
	
?>






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
	<style>
		a:hover{
			text-decoration: none;
		}
	</style>
	<script>
	window.onload=function (){
		
	<?php 
$i=0;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');
$result1=mysqli_query($con,"select count(*) as no from practical_question where question_id like 'mp$concept%' and difficulty_level='EASY'");
$result2=mysqli_query($con,"select count(*) as no from practical_question where question_id like 'mp$concept%' and difficulty_level='MEDIUM'");
$result3=mysqli_query($con,"select count(*) as no from practical_question where question_id like 'mp$concept%' and difficulty_level='HARD'");
while($row=mysqli_fetch_assoc($result1))
	{
		$no=$row ["no"];   
        	
		if($no==0){
	 ?> document.getElementById('easy').disabled=true;
	<?php }      
	}
	while($row=mysqli_fetch_assoc($result2))
	{
		$no=$row ["no"];    		
		if($no==0){
		?> document.getElementById('medium').disabled = true; 
	<?php }      
	}
	while($row=mysqli_fetch_assoc($result3))
	{
		$no=$row ["no"];   		
		   if($no==0){
		?> document.getElementById('hard').disabled=true; 
	<?php }   
	}
	
	
	?>
	}
	</script>
	
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
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li><a href="Profile.php"><i class="fa fa-user" aria-hidden="true">&nbsp;</i> Profile</a></li>	
			<li><a href="Result.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			
			<?php// if($count==0)
			//{?>
			<!--<li><a href=""  onclick="myFunction()"><em class="fa fa-toggle-off" >&nbsp;</em> Exams</a></li>-->
			<script>
/*function myFunction() {
    alert("Your exam has not been scheduled!");
}*/
</script>
			<?php //} else{ ?>	
				
			
			<li><a href="/ProgramTap/home.php"><em class="fa fa-toggle-off" >&nbsp;</em> Exams</a></li>
			<?php// } ?>
			
			<li><a href="/ProgramTap/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Difficulty Level</h1>
			</div>
		</div><!--/.row-->
		
		<!--<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding">
							<div class="large"></div>
							<a href="C.php"><div><img src="c.png" style="height: 60%;width: 60%;"></div><br>
							<div style="text-decoration: none;color: black">C Programming Language</div></a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding">
							<div class="large">
							</div>
							<a href="#"><div><img src="cpp.jpg" style="height: 60%;width: 60%;"></div><br>
							<div style="text-decoration: none;color: black">C++ Programming Language</div></a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding">
							<div class="large">
							</div>
							<a href="#"><div><img src="cpp.jpg" style="height: 60%;width: 60%;"></div><br>
							<div style="text-decoration: none;color: black">Java Programming Language</div></a>
						</div>
					</div>
				</div>
		

	        </div>	<!--/.main-->
             

            <div class="container-fluid">
            	<div class="row">
            		<div class="col-md-2"></div>
				
            		<div class="col-md-3">
					<form action="/ProgramTap/abhi/mock.php?difficulty=4" method="get">
					<input type="hidden" value="<?php echo $concept; ?>" name="concept">
					<input type="hidden" value="EASY" name="difficulty">
            			<button type="submit" class="btn btn-primary" id="easy">Easy</button>
            			</form>
            		</div>
					
					
				
					
            		<div class="col-md-3">
					<form action="/ProgramTap/abhi/mock.php" method="get">
					<input type="hidden" value="<?php echo $concept; ?>" name="concept">
					<input type="hidden" value="MEDIUM" name="difficulty">
            			<button type="submit" class="btn btn-warning" id="medium">Medium</button>
            			</form>
					</div>
				
			
					
					
            		<div class="col-md-3">
					<form action="/ProgramTap/abhi/mock.php" method="get">
					<input type="hidden" value="<?php echo $concept; ?>" name="concept">
					<input type="hidden" value="HARD" name="difficulty">
            			<button type="submit" class="btn btn-success" id="hard">Hard</button>
            			</form>
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
	
	
	
</body>
</html>