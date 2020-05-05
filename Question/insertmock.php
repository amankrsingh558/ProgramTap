<?php
session_start();
$_SESSION['isinsert']=1;
include_once("theConnection.php");
   $ques=$_POST['ta'];
   $o1=$_POST['op1'];
   $o2=$_POST['op2'];
   $o3=$_POST['op3'];
   $o4=$_POST['op4'];
   $sel=$_POST['ans'];
   $conc=$_POST['conc'];
   $dif=$_POST['dif'];
   $eid="mmm";
   
   echo "<h1> $eid </h1>";
   
   $gnum="select qid from mcq where qid like 'm%$conc%' ORDER BY qid desc limit 1";
   $v=$con->query($gnum);
   $r = $v->fetch_row();
   $numb=substr($r[0],4,4);
   $numb=$numb*1+1;

if($numb<=9)
	$qid="mt".$conc."000".$numb;
else if($numb<=99)
	$qid="mt".$conc."00".$numb;
else if($numb<=999)
	$qid="mt".$conc."0".$numb;
else if($numb<=9999)
	$qid="mt".$conc.$numb;
   echo "<h1>$qid</h1>";
   
   
   $qin="INSERT INTO `mcq`( `qid`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `eid`, `dif`) VALUES 
                          ( '$qid', '$ques', '$o1', '$o2', '$o3', '$o4', '$sel', '$eid', '$dif')";
   $val=$con->query($qin);
   if($val)
   header('Location:mockSet.php');
?>
