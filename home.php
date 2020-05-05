<?php require_once 'templates/header2.php';?>
<?php include './header.php'; ?>

<?php

if(isset($_SESSION['exam'])){
	header('location:abhi/exam.php');
	$_SESSION['startexam1']=1;
}
$token=rand(1000,99999);
$_SESSION['startexam']=$token;

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
			header("location:ProgramTap/CANDIDATE/index.php");
		} 
		//echo $_GET['val'];
	//	echo "<script>alert('$_GET['val']')</script>";

		
		$sql1="SELECT s_status from s_exam  where e_status=1 and uid='".$_SESSION['uid']."'";
	$res2 = mysqli_query($con,$sql1) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res2))
    {
    $sstatus=$row[0];
    }
		$_SESSION['status']=$sstatus;
		
		//echo "hello". $_SESSION['status'];
	
?>

	<script src="js/jquery.js"></script>
<?php
$user_id1=$_SESSION['uid'];
$sql="SELECT eid from s_exam  where e_status=1  and uid='".$_SESSION['uid']."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res))
    {
    $eid=$row[0];
    }
	
	//echo $_SESSION['uid'];
	
$sql="select s_status,e_status from s_exam where eid='".$eid."' and uid='".$_SESSION['uid']."'";


	$res=mysqli_query( $con,$sql);
	
$value =  mysqli_fetch_assoc($res);
	//echo $value['e_status'];
	//echo $value['timer'];
	
	$sstatus=$value['s_status'];
	//echo "<h1>$sstatus</h1>";

	$estatus=$value['e_status'];
	
	//echo $sstatus;
	$_SESSION['status']=$sstatus;
	
	
?>

<?php
//echo $_SESSION['status'];
if($_SESSION['status']==-1 && $estatus==1){
				//$_SESSION['success'] = 'You are logged in successfully';

		//	echo "HI";	
header('Location: start-quiz.php');
}
else if($_SESSION['status']==1)
{echo "<script>YOU have successfully Submitted your exam</script>";

}

 ?>
 <br>
 <a href="/ProgramTap/CANDIDATE/index.php"><button type="button" class="btn btn-primary">Back</button></a>
	<div class="content">
	
     	<div class="container">
     		<div class="row">
				
     		
     		
	     		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
	     			<div class="row btn-c well">
	     				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						
					
						<?php
						if($estatus==1 && ($sstatus==0 || $sstatus==-1))
						{?>
		<a href=<?php if($_SESSION['status']==1 || $estatus!=1 ||  $_SESSION['status']==1){echo 'home.php';} else {echo 'start-quiz1.php';} ?> class="btn btn-success btn-home" id="mcq">MCQ</a><br><br>
		
<?php //for practical exam
		   $con1=mysqli_connect('localhost','root');
            mysqli_select_db($con1,'compiler');
			$res=mysqli_query($con1,"select count(*) as no,exam_id from exam_detail where e_status=1 and s_status=0 and user_id='$user_id1'");
			while ($row=mysqli_fetch_assoc($res))
              {
                 $no=$row['no'];
				 if($no==1){
					 $exam_id=$row['exam_id'];
					 ?>   
					 <form action="abhi/exam.php" method="post" target="blank">
                     <input type="hidden" value="<?php echo $token; ?>" name="startexam">
                     <input type="hidden" value="<?php echo $exam_id; ?>" name="examid">
                     <input type="submit"  class="btn btn-success btn-home" style="backgorund-color:green;" value="PRACTICAL" >
                     </form>
					 <?php
				 }
				 else{
					
					 echo '<a href="" class="btn btn-success btn-home"  disabled>PRACTICAL</a> ';
		
				 }
                }
						 } 
						
						
						
						else
						{
		echo '<a href="" class="btn btn-success btn-home"  disabled>MCQ</a><br><br> ';
		
	
		
		//for practical exam
		   $con1=mysqli_connect('localhost','root');
            mysqli_select_db($con1,'compiler');
			$res=mysqli_query($con1,"select count(*) as no,exam_id from exam_detail where e_status=1 and s_status=0 and user_id='$user_id1'");
			while ($row=mysqli_fetch_assoc($res))
              {
                 $no=$row['no'];
				 if($no==1){
					 $exam_id=$row['exam_id'];
					 ?>   
					 <form action="abhi/exam.php" method="post" target="blank">
                     <input type="hidden" value="<?php echo $token; ?>" name="startexam">
                     <input type="hidden" value="<?php echo $exam_id; ?>" name="examid">
                     <input type="submit"  class="btn btn-success btn-home" style="backgorund-color:green;" value="PRACTICAL" >
                     </form>
					 <?php
				 }
				 else{
					
					 echo '<a href="" class="btn btn-success btn-home"  disabled>PRACTICAL</a> ';
		
				 }
                }
						}
					?>
						
						
						
						
						
						
						
							<?php
							//if($_SESSION['status']==1 && $estatus!=1)
							//echo "<script>alert('You have successfully Submitted your Exam')</script>";
							?>
					
							
								<!--<a href="examdetail.php"   class="btn btn-success btn-home">Start Exam</a> -->
							
	     				</div>
	     				<!--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	     					<a href="quiz-results.php" class="btn btn-info btn-home">See Your Quiz Results</a>
	     				</div>-->
							
	     			</div>
					
	     		</div>
	     		
     		</div>
     	</div>
    </div> 


<script type="text/javascript">
function myPopup(url, windowname)
{
window.open(url,windowname,'width=340,height=300',toolbar=no);}
</script>