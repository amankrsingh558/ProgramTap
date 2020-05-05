<?php
$data=$_POST['code'];
 //filtration of code
$correct=0;
$wrong=0;
$h=0;
$c=0;
$m=array("system","fork();","windows.h");
	foreach($m as $invalidCode){
	    if(strpos($data, $invalidCode) !== false){ 
              
          $c=1;						
               break;						
	          }
			  $h++;
	 } 
	 if($c==1){
$error="access denied, you can't use ".$m[$h];
	 }
	 else{
		 require_once("execute.php");
		 
		}	   
if($correct==10){
	echo 1;
}	
else if($wrong==0){
	echo $error;
}	
else
	echo 0;		
?>

