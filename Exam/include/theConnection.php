<?php
   $sr="localhost";
   $un="root";
   $psd="";
   $db="pandav";
   
   $con=new mysqli($sr,$un,$psd,$db);
   
   if($con->connect_error){
	   die("Databse connection failed".$con->connect_error);
   }
  
   ?>