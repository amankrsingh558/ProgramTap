<?php
session_start();

$_SESSION['status']=1;
header("location:home.php");

?>