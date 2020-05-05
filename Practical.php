<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location:/ProgramTap/index.php');
}
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
		

$sql="SELECT e_status from s_exam  where  uid='".$_SESSION['uid']."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res))
    {
    $count=$row[0];
    }
			
	//echo "<script>alert('$count')</script>";	
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
            <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true">&nbsp;</i> Profile</a></li>    
            <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
          
		  
		  	<?php if($count==0)
			{?>
			<li><a href="" onclick="myFunction()"><em class="fa fa-toggle-off" >&nbsp;</em> Exams</a></li>
			
						<script>
function myFunction() {
    alert("Your Exam has not Been Scheduled!");
}
</script>
			<?php } else{ ?>	
				
			
			<li><a href="/ProgramTap/home.php"><em class="fa fa-toggle-off" >&nbsp;</em> Exams</a></li>
			<?php } ?>
		  
		  
		  
		  
            <li><a href="/ProgramTap/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <a href="index.php"><li class="active">Home</a><span>/<a href="C.php">C</a></span><span>/Practical</span></li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Practical</h1>
            </div>
        </div><!--/.row-->
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  
  <script src="Parul/highchart.js"></script>

  <a href="/practical1/startexam.php"><div style="cursor:pointer" id='myChart' style="height: 100%" target="main"></div></a>
  <script>
    var myConfig = {
      "type": "nestedpie",
      "title": {
        "text": "Practical"
      },
      "plot": {
        "tooltip": {
          "text": "C language- %text",
          "font-color": "black",
          "font-family": "Georgia",
          "font-size": 12,
          "background-color": "white",
          "border-width": 1,
          "border-color": "gray",
          "border-radius": "3px",
          "line-style": "dashdot",
          "padding": "10%",
          "text-alpha": 1,
          "alpha": 0.7
        },
        "value-box": {
          "visible": false
        },

           


        "alpha": 0.8,
        "shadow": false,
        "border-width": 1,
        "border-color": "white",
        "slice-start": "30%",
      },




      "series": [{
        "values": [100, 100, 100],
        "background-color": "orange red",
        "text": "C_Basic"
      }, 
      {
        "values": [100, 100, 100],
        "background-color": "yellow orange",
        "text": "Decision Making"
      },
       {
        "values":[100, 100, 100],
        "background-color": "green blue",
        "text": "Loops"
      },
       {
        "values": [100, 100, 100],
        "background-color": "blue purple",
        "text": "Functions"
      },
       {
        "values": [100, 100, 100],
        "background-color": "green green",
        "text": "Arrays"
      },{
        "values": [100, 100, 100],
        "background-color": "orange red",
        "text": "Pointers"
      },
      {
        "values": [100, 100, 100],
        "background-color": "yellow orange",
        "text": "Strings"
      },
      {
        "values": [100, 100, 100],
        "background-color": "green blue",
        "text": "Structures and Unions"
      },
      {
        "values": [100, 100, 100],
        "background-color": "blue purple",
        "text": "Preprocessor,Macros and Typecasting"
      },
      {
        "values": [100, 100, 100],
        "background-color": "green green",
        "text": "Recursion"
      },
      {
        "values": [100, 100, 100],
        "background-color": "green blue",
        "text": "Miscellaneous"
      },]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 600,
      width: "100%"
    });


    zingchart.node_click = function (p) {
    
    
    zingchart.exec('myChart', 'setdata',{
        data : myConfig
    });
}

  </script>
</script>
    
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