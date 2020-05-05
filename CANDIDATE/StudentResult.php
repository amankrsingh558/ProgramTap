



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
</head>
<body style="overflow-x:hidden">
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
			<li ><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Home</a></li>
			<li><a href="Profile.php"><i class="fa fa-user" aria-hidden="true">&nbsp;</i> Profile</a></li>	
			<li class="active"><a href="StudentResult.php"><em class="fa fa-bar-chart">&nbsp;</em> Results</a></li>
			
			<?php if($count==0)
			{?>
			<li><a href=""  onclick="myFunction()"><em class="fa fa-toggle-off" >&nbsp;</em> Exams</a></li>
			<script>
function myFunction() {
    alert("Your exam has not been scheduled!");
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
				<li class="active">Result</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Result</h1>
			</div>
		</div><!--/.row-->
		
		
<?php
   $sr="localhost";
   $un="root";
   $psd="";
   $db="pandav";
   
  
   $con=new mysqli($sr,$un,$psd,$db);
   
   if($con->connect_error){
	   die("Database connection failed".$con->connect_error);
   }
 //$uid="CS160012";
	session_start();
    //$eid="e0001";
	//	$eid=$_SESSION['eid'];
	$uid=$_SESSION['uid'];
	$e="select eid from s_exam where uid='$uid'";
   $ee=$con->query($e);
   ?>
   
      
	  <div style="width:100%;min-height:800px;margin-left:70px;">
	  <label>EXAM  </label>
        		<table  id="tbl" class="table table-bordered table-header table-responsive" style="width:80%;">
       			<thead style="background:#2a3471;color:#fff;">
                        <tr>
       			
       			<th style="text-align: center">Exam Name</th>
       			<th style="text-align: center">Date</th>
       			<th style="text-align: center">Total Marks</th>
       			<th style="text-align: center">Obtained Marks</th>
       		</tr>
	      </thead>
	  
	<?php
		while($ree = mysqli_fetch_array($ee)){
			
			
			
			
			
	      $eid=$ree[0];

	
   $q="select count(*) from mcq where eid='$eid'";
   $v=$con->query($q);
   $r = mysqli_fetch_array($v);
   $n=$r[0]*2;

   $qb="select * from exam where eid='$eid'";
   $vb=$con->query($qb);
   $rb = mysqli_fetch_array($vb);
   
   
    $qry="SELECT  `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, 
	`res8`, `qid9`, `res9`, `qid10`, `res10` FROM `s_exam` WHERE uid='$uid' and eid='$eid'";
   $val=$con->query($qry);
   $row = mysqli_fetch_array($val);

 /*  $cb[1]=0;  $cb[0]=0;           //0-1-2   C Basic
   $ar[1]=0;  $ar[0]=0;            // 3-4-5   Array                   Decision MAking
   $lo[1]=0;  $lo[0]=0;          //    6-7-8  loop  
   $dm[1]=0;  $dm[0]=0;          //    9-10-11  Decision Making        function and scope
   $fs[1]=0;  $fs[0]=0;          //    12-13-14  Functions and scope     Array
   $po[1]=0;  $po[0]=0;          //    15-16-17  Pointers
   $st[1]=0;  $st[0]=0;          //    18-19-20  String
   $su[1]=0;  $su[0]=0;          //    21-22-23  Structures and Unions
   $pm[1]=0;  $pm[0]=0;          //    24-15-26  Preprocessor and macros and Type Casting
   $rc[1]=0;  $rc[0]=0;          //    27-28-29  Recurssion
   $fh[1]=0;  $fh[0]=0;          //    30-31-32  File handling
   $mm[1]=0;  $mm[0]=0;          //    33-34-35  Memory Management
   $ms[1]=0;  $ms[0]=0;          //    36-37-38  Miscelaneous
   */
   

   $indcol=0;
   $index=0;
   $total=0;
   $marks=0;
  while($indcol<$n){
	   
	  
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  
		  
		  $marks=$marks+$val;
	   
	   $indcol+=2;
   }
   
   
   ?>
          		<tr>
			  <td style="text-align: center"><?php  echo "$rb[2]"; ?></td>
			  <td style="text-align: center"><?php  echo "$rb[3]"; ?></td>
			  <td style="text-align: center"><?php  echo "$total"; ?></td>
			  <td style="text-align: center"><?php  echo "$marks"; ?></td>
			</tr>
   
		<?php
		
		
		}
		
		
		
		
		
		
		
		
   function isright($b,$i,$con){
	   $u=0;
	   $tqry="select ans,dif from mcq where qid='$b'";
	  $vall=$con->query($tqry);
	  $rw = mysqli_fetch_array($vall);
	  
	  $eid=$GLOBALS['eid'];
	  $tqryc="select easy,medium,difficult from exam where eid='$eid'";
	  $vallc=$con->query($tqryc);
	  $rwc = mysqli_fetch_array($vallc);
	  
	  if($rw[1]==1)
		  $u=$rwc[0];
	  else if($rw[1]==2)
		  $u=$rwc[1];
	  else if($rw[1]==3)
		  $u=$rwc[2];
	  
	  $GLOBALS['total']=$GLOBALS['total']+$u;
	  if($rw[0]==$i){
		  return $u;
	  }
	  else{
		  return 0;
	  }
   }
	
  ?>			
       		

       		
       		</table>
			
			           
					   
					   <!-- mock table start -->
			<div style="padding-top:40px;"><?php
			$mck="select * from mock where uid='$uid'";
	  $valm=$con->query($mck);
	  $rm = $valm->fetch_row()
	   ?>
	  
	  
	         <label>MOCK  </label>
			<table  id="tbl2" border="2" class="table table-bordered table-header table-responsive" style="width:80%;">
			<thead style="background:#2a3471;color:#fff;">
			<tr>
			<th> Concept </th>
			<th> Marks </th>
			
			
			
			
			</tr>
			</thead>
			   <?php 
			   $k=2;
				   ?>
				   
				<tr>  <td> C Basic </td> <td> <?php echo "$rm[2]"; ?>  </td>  </tr>
				 <tr> <td> Decision Making </td> <td> <?php echo "$rm[3]"; ?>  </td></tr>
				<tr>  <td> Loop </td> <td> <?php echo "$rm[4]"; ?>  </td></tr>
				 <tr> <td> functions & Scope </td> <td> <?php echo "$rm[5]"; ?>  </td></tr>
				 <tr> <td> Array </td> <td> <?php echo "$rm[6]"; ?>  </td></tr>
				  <tr><td> Pointer </td> <td> <?php echo "$rm[7]"; ?>  </td></tr>
				  <tr><td> Strings </td> <td> <?php echo "$rm[8]"; ?>  </td></tr>
				 <tr> <td> Structure/Unions </td> <td> <?php echo "$rm[9]"; ?>  </td></tr>
				  <tr> <td> Preprocessor/Macros </td><td> <?php echo "$rm[10]"; ?>  </td></tr>
				   <tr><td> Recursion </td><td> <?php echo "$rm[11]"; ?>  </td></tr>
				  <tr> <td> File handling </td><td> <?php echo "$rm[12]"; ?>  </td></tr>
				  <tr> <td> Memory Management </td><td> <?php echo "$rm[13]"; ?>  </td></tr>
				  <tr> <td> Miscelaneous </td><td> <?php echo "$rm[14]"; ?>  </td></tr>
				  <tr> <td> Total </td><td> <?php echo "$rm[15]"; ?>  </td></tr>
				  
				   <?php
			   
			   ?>
			
			</table>
			
       
			</div>
			</div>
	                 <!-- mock table endl -->
	
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
	<link rel="stylesheet" type="text/css" href="DT/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="DT/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="DT/js/dataTables.bootstrap4.min.js"></script>

       <script type="text/javascript">
             $(document).ready(function() {
             $('#tbl').DataTable();
             } );
       </script>
	<script type="text/javascript">
             $(document).ready(function() {
             $('#tbl2').DataTable();
			 "scrollX":true;
             } );
       </script>
	
</body>
</html>