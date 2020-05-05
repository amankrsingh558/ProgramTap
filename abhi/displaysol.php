<?php
$cid=$_GET['cid'];
$eid=$_GET['eid'];
$qid=$_GET['qid'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'copiler');
$k=1;
$q="select submission_id from solution where userid='abhi123456' and course_id='$cid' and exam_id='$eid' and question_id='$qid'";

$result=mysqli_query($con,$q);
//$num=mysql_num_rows($result);
while($row=mysqli_fetch_assoc($result))
	{
		$sub_id=$row ["submission_id"]; 
		$r="select file_location from submited_file where submission_id='$sub_id'";
       $result1=mysqli_query($con,$r);
	   $row1=mysqli_fetch_assoc($result1);
	   $g=$row1["file_location"];
	   echo "<a href='sol.php?file_location=$g'>question$k</a>.<br>";	
$k++;	   
	}

?>
