<?php require_once 'templates/header2.php';?>


<?php  include './header.php';
error_reporting(E_ALL ^ E_NOTICE);
//echo "STATUS".$_SESSION['status'];

	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		
	
?>

<?php 

//echo "STATUS".$_SESSION['status'];
//echo "hel";

if($_SESSION['status']==1)
{
header('location:/ProgramTap/CANDIDATE/index.php');
exit;
}


		if($_SESSION['status']==-1)
	{	//echo "<script>alert('still alive')</script>";
		//$_POST['start']=true;
		header("location:gg.php");
		
		
	}
	
	/*else
	{header("location:home.php");
		
	}*/
	
	
	
	//echo $_GET['eid'];
	
	$eid=$_GET['eid'];
	
	?>
	<?php 

  $query = "select * from exam where eid='$eid' ";
	$res=mysqli_query( $con,$query);
	if($res)
	{
//echo "hello";	
	}
 while ($row=mysqli_fetch_assoc($res))
 {
	
$ename=$row['ename'];
$date=$row['date'];
$noq=$row['noq'];
$duration=$row['duration'];
$easy=$row['easy'];
$medium=$row['medium'];
$difficult=$row['difficult'];
 }
?>
	
	



    
	
	
	
	
	
	
	
	<!---------------------------------------------------------------------------------------->
	
	  <title> Attempt EXAM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
	 

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	
	<link href="css1/style.css" rel="stylesheet">
	
	

	<script src="js/jquery.js"></script>
	
	
	  	<script src="js/basic.js"></script>
		

    <script src="bootstrap/js/bootstrap.min.js"></script>

	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	
	
	<script src="js/Chart.bundle.min.js"></script>
	

	 <link rel="manifest" href="js/manifest.json">
	 

 </head>
  <body>
		   


		<center></center>
	
		

	<br><Br>
 <div class="container">

 

  <div class="row">
     <form method="post" id="quiz_detail" action="gg.php" name="signin">
	
<div class="col-md-12">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<br><br>	
<table class="table table-bordered">
<tr><td colspan='2'><b style="color:red; font-size:27px">Caution: If You leave the Exam Window or minmize it, then Exam will be submitted Automatically </b><br></td></tr>
<tr><td>EXAM NAME</td><td><?php echo $ename; ?></td></tr>
<tr><td>Date of Exam</td><td><?php echo $date; ?></td></tr>
<tr><td>Duration </td><td><?php echo $duration; ?>  mins</td></tr>

<tr><td>Minimum Percentage Required to Pass</td><td>50</td></tr>
<tr><td>Correct Score</td><td>Easy=<?php echo $easy; ?>     MEDIUM=<?php echo $medium; ?>     HARD=<?php echo $difficult; ?>  </td></tr>
<tr><td>Negative Marks</td><td>NO</td></tr>
<tr><td>Number Of Question</td><td><?php echo $noq; ?> </td></tr>
</td></tr>

</table>
  <button class="btn btn-success" name="start" id="start"  type="submit" style="display:none;">Start Exam</button>
 
 		</div>
</div>
 
 </div>
 </form>
 </div>

 		
<script>
/*function myFunction() {
    var myWindow = window.open("gg.php");
}*/



</script>



<button onclick="window.location.reload()" id="next2">Click  here</button>
	
<script type="text/javascript">

	var windowName = 'userConsole'; 

var popUp = window.open('/popup-page.php', windowName, 'width=10px, height=10px, left=0, top=0, scrollbars, resizable');
if (popUp == null || typeof(popUp)=='undefined') { 	
	alert('Please disable your pop-up blocker and click the "Open" link again.'); 
	
	$('#start').hide();
} 
else { 	

$('#start').show();
$('#next2').hide();
	popUp.close();
	
	
}
</script>

<script src="js/start.js"></script>

	
		
<script src="js/start.js"></script>

	
