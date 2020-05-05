<?php 
	$s="localhost";
	$u="root";
	$pw="";
	$db="pandav";

	$con=new mysqli($s,$u,$pw,$db);
   
   if($con->connect_error){
	   die("Databse connection failed".$con->connect_error);
   }

 ?>