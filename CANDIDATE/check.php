<?php
session_start();
$uid=$_SESSION['uid'];
 $con1=mysqli_connect('localhost','root');
  mysqli_select_db($con1,'pandav');
  $result=mysqli_query($con1,"select status from user where uid='$uid'");
while($row=mysqli_fetch_assoc($result))
	                   {
						   
						   $count=$row['status'];
						   echo $count;
					   }
?>