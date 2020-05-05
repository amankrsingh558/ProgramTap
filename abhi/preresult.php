<?php
 session_start();
 if(isset($_SESSION['exam']) && isset($_POST['mediater']) && isset($_SESSION['examtoken'])){
    if(($_SESSION['exam']==0)  && ($_POST['mediater']==$_SESSION['examtoken'])){
		
			unset($_SESSION['exam']);
			unset($_SESSION['startexam']);
			unset($_SESSION['startexam1']);
			unset($_SESSION['file']);
              unset($_POST['mediater']);	
            
			
			$userid=$_SESSION['uid'];
			$exam_id=$_SESSION['examid1'];
		    $con1=mysqli_connect('localhost','root');
            mysqli_select_db($con1,'compiler');
			mysqli_query($con1,"update exam_detail  set s_status=1 where user_id='$userid' and exam_id='$exam_id'");
			
		  
			header("location:/ProgramTap/home.php");
	    	
		}
		
    
	else{
			header('location:home1.php');
		}
 }
 else{
			header('location:home2.php');
		}
	
?>