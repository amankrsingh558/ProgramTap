	<?php
	  include_once("theConnection.php");
	 $uid=$_POST['uid'];
	$sql="update user set passwd='cvrce' where uid='$uid'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     
    

	?>