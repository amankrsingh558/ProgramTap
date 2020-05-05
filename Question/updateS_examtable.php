<?php

session_start();
 $eid=$_SESSION['eid']; 
 
 //$eid='p0001'; 
include_once("theConnection.php");

$d=$_POST['date'];
$dr=$_POST['dur'];
$rs=$_POST['r']*1;



if(substr($eid,0,1)=='e'){
//   UPdate
$qv="UPDATE `exam` SET `date`='$d',`duration`='$dr', ready=1 WHERE eid='$eid'";
$v=$con->query($qv);
   
echo $eid ;		
		
		if($rs==1){
	$dv="DELETE FROM `s_exam` WHERE eid='$eid'";
$dv=$con->query($dv);
}
		
$_SESSION['eid'] = $eid;
$_SESSION['ename'] = $ename;

$dr;
$dr=$dr*60;
include_once("theConnection.php");
$i=1;
$str1="INSERT INTO `s_exam`(`eid`, s_status, e_status, timer, uid, ";
$str9="INSERT INTO `exam_detail`(`exam_id`, user_id, ";
$str8="values ('$eid', ";
$str3="values ('$eid', 0, 0 , $dr, ";
$str2="";
$ques="SELECT qid from mcq where eid='$eid' order by si ";
	   $qvall=$con->query($ques);
	    while($roww = mysqli_fetch_array($qvall)){
		$str1="$str1"."qid"."$i, ";
			$str2="$str2"."'"."$roww[0]"."', ";
			$i+=1;
		}
		$str1=substr($str1,0,-2).") ";
		$str2=substr($str2,0,-2).")";
		
		
		//select uid from user where branch in ('CS', 'IT', 'EE') and year in ('1st', '3rd')
		
	$i=0;	
$user="SELECT uid from user where"; //   // apply filter  here 

if(isset($_POST['branch'][0])){
	$user=$user." branch in (";
}


    while(isset($_POST['branch'][$i])){
		if($i==0){
			$user=$user."'".$_POST['branch'][$i]."'";
		}
		else {
    $user=$user.", '".$_POST['branch'][$i]."'";
		}
		$i=$i+1;
	}
	
	if(!isset($_POST['branch'][0])){
		if(isset($_POST['year'][0]))
	    $user=$user." year in (";
   }
	else{
		if(isset($_POST['year'][0]))
		$user=$user.") and year in (";
	}
	

	$i=0;
	    while(isset($_POST['year'][$i])){
		if($i==0){
			$user=$user."'".$_POST['year'][$i]."'";
		}
		else {
    $user=$user.", '".$_POST['year'][$i]."'";
		}
		$i=$i+1;
	}
	$user=$user.")";
	//echo "<h1> $user</h1>";
	
$uval=$con->query($user);
	    while($roww = mysqli_fetch_array($uval)){
			$tempstr="$str3"."'"."$roww[0]"."', ";
			$fqry=$str1.$tempstr.$str2;
			echo "<h1>$fqry</h1>";
			   $isInserted=$con->query($fqry);
  
		}
		 header('Location: indexadmin.php');  // Change it to index admin*/
		
}







else if(substr($eid,0,1)=='p'){
	   $sr="localhost";
   $un="root";
   $psd="";
   $db="compiler";
    $con2=new mysqli($sr,$un,$psd,$db);
	
   $qv="UPDATE `exam` SET `date`='$d',`duration`='$dr', ready=1 WHERE eid='$eid'";
$v=$con->query($qv);
   
  
   		if($rs==1){
	$dv="DELETE FROM `exam_detail` WHERE exam_id='$eid'";
 $dv=$con2->query($dv);
}
   
  
   
   if($con2->connect_error){
	   die("Databse connection failed".$con2->connect_error);
   }
   
   // filetr
   
   $i=0;	
$user="SELECT uid from user where"; //   // apply filter  here 

if(isset($_POST['branch'][0])){
	$user=$user." branch in (";
}


    while(isset($_POST['branch'][$i])){
		if($i==0){
			$user=$user."'".$_POST['branch'][$i]."'";
		}
		else {
    $user=$user.", '".$_POST['branch'][$i]."'";
		}
		$i=$i+1;
	}
	
	if(!isset($_POST['branch'][0])){
		if(isset($_POST['year'][0]))
	    $user=$user." year in (";
   }
	else{
		if(isset($_POST['year'][0]))
		$user=$user.") and year in (";
	}
	

	$i=0;
	    while(isset($_POST['year'][$i])){
		if($i==0){
			$user=$user."'".$_POST['year'][$i]."'";
		}
		else {
    $user=$user.", '".$_POST['year'][$i]."'";
		}
		$i=$i+1;
	}
	$user=$user.")";
	
	//   filter end
	
	$uval=$con->query($user);
	$str9="INSERT INTO `exam_detail`(`exam_id`, user_id) values ('$eid', ";
	  while($r = mysqli_fetch_array($uval)){
			$tempstr="$str9"."'$r[0]'".")";
			$pqry=$tempstr;
			
			   $isInserted=$con2->query($pqry);
       
		}
		if($isInserted)
	header('Location: indexadmin.php');
        else   
			 echo "<h1>$pqry</h1>";
			
}

?>