
<?php

if( isset( $_POST['submit_form'] ) )
{
$uid=$_POST['uid'];
$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpass'];

$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('pandav');

$insertdata=" INSERT INTO user VALUES( '$uid','$name','$email','$password' ) ";
mysql_query($insertdata);

}
?>