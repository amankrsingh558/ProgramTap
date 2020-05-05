<?php
$sid=$_GET['file_location'];


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'copiler');
$q="select file_location from submited_file where submission_id='$sid'";


$sub_id=null;
$result=mysqli_query($con,$q);
//$num=mysql_num_rows($result);
while($row=mysqli_fetch_assoc($result))
	{
		$sub_id=$row ["file_location"]; 
		
		echo $data;	
echo "hello";		
	}
	$data=file_get_contents($sid);
	echo $data;
	echo "hello";
?>