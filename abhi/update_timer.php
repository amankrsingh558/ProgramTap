<?php
session_start();
$uiid=$_SESSION['uid'];
$eid=$_SESSION['examid1'];
$timer=$_POST['timer'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');
mysqli_query($con,"update exam_detail set timer='$timer' where exam_id='$eid' and user_id='$uiid'");

?>