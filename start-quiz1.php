<?php require_once 'templates/header2.php';?>

<style>
#btn{
	
	position:relative;
	top:180px;
	right:500px;
}

</style>
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

//echo "STATUS=".$_SESSION['status'];


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

//echo $_SESSION['status'];
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
	
//$var_value=5;
?>

<center>
<?php 

  $query = "select * from s_exam  where uid='".$_SESSION['uid']."' ";
	$res=mysqli_query( $con,$query);
	if($res)
	{
//echo "hello";	
	}
 while ($row=mysqli_fetch_assoc($res))
 {
	 ?>
	 <?php 
	 if($row['e_status']==1  && $row['s_status']==0){
		 $eid=$row['eid'];
		 $query2 = "select ename from exam  where eid='$eid' ";
	$res2=mysqli_query( $con,$query2);
	$row2=mysqli_fetch_assoc($res2);
	 ?>
	 <a href="start-quiz.php?eid=<?php echo $row['eid'];?>"><button type="button"  id="btn" class="btn btn-success btn-lg active"><?php echo $row2['ename']; ?></button></a>
	<?php 
 }
 else
 {$eid=$row['eid'];
		 $query3 = "select ename from exam  where eid='$eid' ";
	$res3=mysqli_query( $con,$query3);
	$row3=mysqli_fetch_assoc($res3);
	?> 
	 	 <a href="#"><button type="button" id="btn" class="btn btn-danger btn-lg" disabled><?php echo $row3['ename']; ?></button></a>

 <?php
 
 }
 
 
 }
?>

</center>