<?php

include_once('theConnection.php');


/*$number="SELECT noq from exam where eid='$eid'";
$v=$con->query($number);
$n2 = $v->fetch_row();
$n=$n2[0]  ; // number of questions to copy*/
$eid1=$_GET['val2'];
$eid2=$_GET['val1'];
$n=$_GET['num'];


$q="select * from mcq where eid='$eid1'";
	   $qv=$con->query($q);
	   $index=0;
	    while($index<$n){
			$roww = mysqli_fetch_array($qv);
			$qid=generateQid($roww[1],$eid2);
			$ques=$roww[2];
			$opt1=$roww[3];
			$opt2=$roww[4];
			$opt3=$roww[5];
			$opt4=$roww[6];
			$ans=$roww[7];
			$diff=$roww[9];
			$iq="INSERT INTO `mcq`(`qid`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `eid`, `dif`) VALUES ('$qid', '$ques', '$opt1','$opt2','$opt3','$opt4','$ans','$eid2','$diff')";
		    $iv=$con->query($iq);
			
			$index=$index+1;
		}
  function generateQid($q,$eid2){
	  
	  $qid=substr($q,0,4).$eid2;
	  
	     $gnum="select count(*) from mcq where qid like '$qid%' ORDER BY qid desc limit 1";
   $v=$GLOBALS['con']->query($gnum);
   $r = $v->fetch_row();
   $numb=$r[0];
   $numb=$numb*1+1;

   
   
if($numb<=9)
	$qid=$qid."000".$numb;
else if($numb<=99)
	$qid=$qid."00".$numb;
else if($numb<=999)
	$qid=$qid."0".$numb;
else if($numb<=9999)
	$qid=$qid.$numb;

return $qid;
  }
  
  header('Location: viewQuestions.php?val='.$eid2.'&ad=0.php');

?>