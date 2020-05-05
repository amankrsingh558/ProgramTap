<?php
session_start();
$uid=$_SESSION['uid'];
 $con1=mysqli_connect('localhost','root');
  mysqli_select_db($con1,'pandav');
  mysqli_query($con1,"update user set status=1 where uid='$uid'");

?>