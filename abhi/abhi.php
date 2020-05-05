

<?php
 $data=$_GET['ans'];


 
$my_file = 'code.c';
file_put_contents($my_file, $data);
 
system("gcc {$my_file} 2> error1.txt ");
 
$error = file_get_contents("error1.txt");
$ans =file_get_contents("out.txt");
if($error=='')
{
    $x=shell_exec("a < input.txt ");
	if($x==$ans){
	echo "code is submited successfully";	
}
else
echo "wrong answer";	} 
else
    echo $error;
?>

