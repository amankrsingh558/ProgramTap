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
            <li><a href="Profile.php"><i class="fa fa-user" aria-hidden="true">&nbsp;</i> Profile</a></li>    
            <li><a href="Result.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
        
		
			

			
			<li><a href="/ProgramTap/home.php"><em class="fa fa-toggle-off" >&nbsp;</em> Exams</a></li>
			
		
		
		
		
            <li><a href="/ProgramTap/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <a href="index.php"><li class="active">Home</a><span>/<a href="C.php">C</a></span><span>/Tutorial</span></li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tutorial</h1>
            </div>
        </div><!--/.row-->
<div id="container" style="height: 80%" target="main"></div>
<script>
	Highcharts.chart('container', {

    chart: {
        type: 'pie'
    },

    title: {
        text: 'Tutorial'
    },

    xAxis: {
        type: 'category'
    },

    plotOptions: {
        series: {
            cursor: 'pointer',
            //dataLabels:{enabled:false,
            point: {
                events: {
                    click: function () {
                       location.href = 'https://en.wikipedia.org/wiki/' + this.options.key;
							// window.location.assign("/ProgramTap/CANDIDATE/difficulty.php?concept="+this.options.key);
                    }
                }
            }
        }
    //}
    },

    series: [{
        data: [{
            y: 20,
            color:'#ADFF2F',
            name: 'C_Basic',
            key: 'C_Basic'
        }, {
            y: 20,
            color:'#7FFFD4',
            name: 'Decision Making',
            key: 'Decision Making'
        },{
            y: 20,
            color:'#0000FF',
            name: 'Loops',
            key: 'Loops'
        },{
            y: 20,
            color:'#cb3434',
            name: 'Functions',
            key: 'Functions'
        },{
            y: 20,
            color:'#a100e6',
            name: 'Arrays',
            key: 'Arrays'
        },
        {
            y: 20,
            color:'#ff0088',
            name: 'Pointers',
            key: 'Pointers'
        },{
            y: 20,
            color:'#FFD700',
            name: 'Strings',
            key: 'Strings'
        },
        {
            y: 20,
            color:'#3ca1c3',
            name: 'Structures and Unions',
            key: 'Structures and Unions'
        },{
            y: 20,
            color:'#ff5b1a',
            name: 'Preprocessor,Macros and Typecasting',
            key: 'Preprocessor,Macros and Typecasting'
        },
        {
            y: 20,
            color:'#ff6666',
            name: 'Recursion',
            key: 'Recursion'
        }, {
            y: 20,
            color:'#00fa9a',
            name: 'File Handling',
            key: 'File Handling'
        }
        ,
        {
            y: 20,
            color:'#39ac6b',
            name: 'Memory Management',
            key: 'Memory Management'
        }]
    }]
});
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