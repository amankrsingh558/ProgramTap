<?php
 session_start();
 if(isset($_SESSION['exam']) && isset($_POST['mediater']) && isset($_SESSION['examtoken'])){
    if(($_SESSION['exam']==0)  && ($_POST['mediater']==$_SESSION['examtoken'])){
		
			unset($_SESSION['exam']);
              unset($_POST['mediater']);		   
		  
		  
			header("location:marks.php");
	    	
		}
		
    
	else{
			header('location:home1.php');
		}
 }
 else{
			header('location:home.php');
		}
	
?>