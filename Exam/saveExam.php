<?php




include './include/theConnection.php';
$k = $_GET['type'];
$ename = $_GET['ename'];
$noq = $_GET['num'];
$easy = $_GET['n1'];
$med = $_GET['n2'];
$hard = $_GET['n3'];

echo "<h1>$k</h1>";
/*
echo $k;
echo $ename;
echo $noq;
echo $easy;
echo $med;
echo $hard;
*/
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

echo "<h1>$r[0]</h1>";

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


$qv="INSERT INTO `exam`( `eid`, `ename`,`noq`, `easy`, `medium`, `difficult`,ready) VALUES ('$eid', '$ename', '$noq', '$easy', '$med', '$hard',0)";
$v=$con->query($qv);

echo "<h1>$qv</h1>";

			
$_SESSION['eid'] = $eid;
$_SESSION['ename'] = $ename;
if($v){
	if($k=='t')
header('Location: /ProgramTap/Exam/createExam.php?eid='.$eid);
else
	header('Location: /ProgramTap/QUESTION/practical_exam_question.php?val='.$eid);
}

//header("location:createExam.php");

?>



