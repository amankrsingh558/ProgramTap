<?php
session_start();
$data=$_POST['code'];
$data2=0;
$userid="abhi123456";
$course_id="c";
$exam_id="e1";
$folder=$_SESSION['file'];
$question_id=$_SESSION['question'];
$pass="";

$file=$folder."submissions/".$userid.'/'.$question_id.'/'."test.c";
$samplein=$folder."questions/".$question_id.'/samplein';
$sampleout=$folder."questions/".$question_id.'/sampleout';
$compileoutput=$folder."questions/".$question_id.'/compileoutput.txt';
if(!file_exists("$folder/submissions/$userid/$question_id")){
		mkdir("$folder/submissions/$userid/$question_id",0777,true);
		 }
		 $fh1=fopen($file,'w');
		fwrite($fh1,$data);  
         fclose($fh1);
//compilation
system("gcc {$file} 2> compilationerror.txt ");
$error = file_get_contents("compilationerror.txt");
//table formation
if($error=='')
{  $pass= "<center><table id='table1' cellpadding='25' border='3'  style='margin-top:50px;margin-bottom:50px;border-style:dashed;text-align:center'><tr><th>Testcase</th><th>Sample Inputs</th> <th>Your Outputs</th> <th>Correct Answer</th><th>Status</th></tr>";
	for($i=1;$i<3;$i++){
		$ans =file($sampleout."$i.txt");
		$y=$samplein."$i.txt";
		//running object file
	$n=microtime(true);	
	$x=shell_exec("a < {$y} >{$compileoutput}");
	$o=microtime(true);
					$g=$o-$n; 
					if($g>$data2){
						$data2=$g;
						
					}
	
	                $k=0;
					$output4=file($compileoutput);
					$s=sizeof($ans);
					if($s==sizeof($output4)){
					//if(sizeof($output4)==$s){
					for($k=0;$k<$s;$k++){
						if($ans[$k]!=$output4[$k]){
							break;	
						}
					}
					}

	if($k==$s){
							$ad="abc123321234.txt";
	file_put_contents($ad,"true");
		$status=true;
		$input=file_get_contents($samplein."$i.txt");
		$pass.= "<tr><td>$i</td><td>$input</td><td>$x</td><td>$ans</td><td style='color:green;'>&#x2714</td></tr>";
}

else{
						$ad="abc123321234.txt";
	file_put_contents($ad,"false");
		$input=file_get_contents($samplein."$i.txt");
		$pass.= "<tr><td>$i</td><td>$input</td><td>$x</td><td>$ans</td><td style='color:red;'>&#10060;</td></tr>";
}
	}
	$pass.="</table></center>";
	$pass2="hello every one";
	$data3="heeee"
	$pass4=array($pass2,$data3);
	
					
	echo json_encode($pass4);
	} 
else
{
	$pass1=array($error,1);
    echo json_encode($pass1);
}
?>

