<?php
$i=0;
include_once('theConnection.php'); 
 session_start();
 $n1=$_SESSION['noqq'];
$k=1;
while($i<$n1[0]){
	
	$qq=$_POST['ques'][$i];
	$oa=$_POST['aopt'][$i];
	$ob=$_POST['bopt'][$i];
	$oc=$_POST['copt'][$i];
	$od=$_POST['dopt'][$i];
	$ans=$_POST['ans'][$i];
	$qid=$_POST['qid'][$i];
	$q="update mcq set ques='$qq', opt1='$oa',  opt2='$ob',  opt3='$oc',  
	opt4='$od', ans='$ans' where qid='$qid'";
    $t=$con->query($q);
	
$i++;
$k++;
}
	header("Location:indexadmin.php");
	
?>