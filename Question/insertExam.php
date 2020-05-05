<?php
session_start();
include_once("theConnection.php");
$k=$_POST['type'];

if($k=='t'){
$qq="SELECT eid FROM exam where eid like 'e%' ORDER BY SI DESC LIMIT 1";
$eid='e';
}
else{
$qq="SELECT eid FROM exam where eid like 'p%' ORDER BY SI DESC LIMIT 1";	
$eid='p';
}
$val=$con->query($qq);
$r = $val->fetch_row();
  $numb=substr($r[0],1,4);
$numb=(int)$numb+1;
  echo "<h1>$numb</h1>";
if($numb<=9)
	$eid=$eid."000".$numb;
else if($numb<=99)
	$eid=$eid."00".$numb;
else if($numb<=999)
	$eid=$eid."0".$numb;
else if($numb<=9999)
	$eid=$eid."".$numb;
echo "<h1>$eid</h1>";
$ename=$_POST['ename'];
if($k=='t')
$noq=$_POST['noq']*1;
else
$noq=5;
$easy=$_POST['n1'];
$med=$_POST['n2'];
$hard=$_POST['n2'];
$qv="INSERT INTO `exam`( `eid`, `ename`,`noq`, `easy`, `medium`, `difficult`,ready) VALUES ('$eid', '$ename', '$noq', '$easy', '$med', '$hard',0)";
$v=$con->query($qv);
$_SESSION['eid'] = $eid;
$_SESSION['ename'] = $ename;
if($v){
	if($k=='t')
header('Location: createExam.php?eid='.$eid);
else
	header('Location: practical_exam_question.php?eid=');
}

?>