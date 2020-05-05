<?php

	 $con = mysqli_connect('localhost','root');
  if($con)
  //echo 'connected';
   mysqli_select_db($con,'pandav');
   

$uid = $_POST['uid'];

/* Query */
$query = "select count(*) as cntUser from user where uid='".$uid."'";

$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

echo $count;
?>