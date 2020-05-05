

<?php
 $data=$_POST['code'];
$data2=0;
 
 
$my_file = 'code11.c';

$pass="";
file_put_contents($my_file, $data);


system("gcc {$my_file} 2> compilationerror.txt ");
 
$error = file_get_contents("compilationerror.txt");


if($error=='')
{  $pass= "<center><table id='table1' cellpadding='25' border='3'  style='margin-top:50px;margin-bottom:50px;border-style:dashed;text-align:center'><tr><th>Testcase</th><th>Sample Inputs</th> <th>Your Outputs</th> <th>Correct Answer</th><th>Status</th></tr>";
	for($i=1;$i<3;$i++){
	$n=microtime(true);	
    $x=shell_exec("a < input$i.txt");
	$o=microtime(true);
					$g=$o-$n; 
					if($g>$data2){
						$data2=$g;
						
					}
	$ans =file_get_contents("out$i.txt");
	if($x==$ans){
		$status=true;
		//mkdir("abhi1234");
		//$name="abhi1234";
		//echo "";
		//$fh1=fopen($name.'/'.$my_file,'w');
		//fwrite($fh1,$data);
		$input=file_get_contents("input$i.txt");
		
		$pass.= "<tr><td>$i</td><td>$input</td><td>$x</td><td>$ans</td><td style='color:green;'>&#x2714</td></tr>";
		//echo "";
		//echo "";
		//echo ""; 
	
}

else{
	
	//mkdir("abhi1234");
		//$name="abhi1234";
		//echo "<tr><td>$i</td>";
		//$fh1=fopen($name.'/'.$my_file,'w');
		//fwrite($fh1,$data);
		$input=file_get_contents("input$i.txt");
		
		$pass.= "<tr><td>$i</td><td>$input</td><td>$x</td><td>$ans</td><td style='color:red;'>&#10060;</td></tr>";
		//echo "";
		//echo ""; 
		//echo "";
}
	}
	$pass.="</table></center>";
	//$data2.="sec";
	$pass1=array($pass,$data2,2);
	echo json_encode($pass1);
	} 
else
{
	$pass1=array($error,1);
    echo json_encode($pass1);
}
?>

