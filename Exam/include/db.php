<?php
$DB_host="localhost";
$DB_user="root";
$DB_pass="";
$DB_name="pandav";



try{


$db=new PDO("mysql:host={$DB_host};dbname={$DB_name};",$DB_user,$DB_pass);

}catch (PDOException $e){
	echo $e->getMessage();
}
include './crud.php';
$crud = new crud($db);


?>