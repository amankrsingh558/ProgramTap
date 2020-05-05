<?php
session_start();
include_once("theConnection.php");
   $d=$_POST['date'];
   $dr=$_POST['dur'];
   $dr*=60;
   echo "$d";
   $eid=$_SESSION['eid'];
   $qin="UPDATE `exam` SET `date`='$d',`duration`='$dr' WHERE eid='$eid'";
   $val=$con->query($qin);
   if($val)
   header('Location: indexadmin.php');
   else
	   echo "FAIL";

$con->close();
?>
