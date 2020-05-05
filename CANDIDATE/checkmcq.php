 
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
		
		?>

<?php

$cid=$_POST['concid'];


$count=0;
$sql="select * from mcq where qid like 'mt$cid%'";
$res = mysqli_query($con,$sql) or die(mysqli_error($con));
$count = mysqli_num_rows($res);
 echo $count;
?>