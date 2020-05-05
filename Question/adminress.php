<?php
   $sr="localhost";
   $un="root";
   $psd="";
   $db="pandav";
   
  
   $con=new mysqli($sr,$un,$psd,$db);
   
   if($con->connect_error){
	   die("Database connection failed".$con->connect_error);
   }
   $index=0;
   while($index<10){
	   $an[$index]=0;
	   $index+=1;
   }
   $index=0;
    $qry="SELECT eid, ename FROM exam where duration>0 order by eid desc LIMIT 5";
   $val=$con->query($qry);
   while( $row = mysqli_fetch_array($val)){
	   $q="SELECT count(*) FROM `s_exam` WHERE eid='$row[0]'";
	    $v=$con->query($q);
		 $vv = mysqli_fetch_array($v);
		$an[$index]=$row[1];
		$an[$index+1]=$vv[0];
		$index+=2;
   }
  
  echo JSON_encode($an);
 