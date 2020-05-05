<?php
ob_start();
session_start();
$uid=$_SESSION['uid'];
require_once 'config.php';
$user_obj = new Cl_User();
$data = $user_obj->logout($uid);
?>