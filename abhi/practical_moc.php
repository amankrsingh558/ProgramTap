<?php
session_start();
$q=array();
$i=0;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');

$result=mysqli_query($con,"select question_id from practical_question where question_id like 'ep%' and status=0 order by s_no desc limit 5");
while($row=mysqli_fetch_assoc($result))
	{
		$q[$i]=$row ["question_id"];       
		$i++;      
	}
	
	$exam_id="e0001";
	$exam_date="2014-09-12";
	$exam_duration=2000;
mysqli_query($con,"insert into practical_exam (exam_id,q1,q2,q3,q4,q5,exam_date,exam_duration) values ('$exam_id','$q[0]','$q[1]','$q[2]','$q[3]','$q[4]','$exam_date',$exam_duration)");

?>