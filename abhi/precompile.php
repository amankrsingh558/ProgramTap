<?php
session_start();
$data=$_POST['code'];
$data2=0;
$userid=$_SESSION['uid'];
$course_id="c";
$exam_id=$_SESSION['examid1'];
$folder=$_SESSION['file'];
$question_id=$_SESSION['question'];
$pass="";

$file=$folder."submissions/".$userid.'/'.$question_id.'/'."test.c";
$samplein=$folder."questions/".$question_id.'/samplein';
$sampleout=$folder."questions/".$question_id.'/sampleout';
$compileoutput=$folder."submissions/".$userid.'/'.$question_id.'/compileoutput.txt';
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
					if(sizeof($output4)==$s){
					for($k=0;$k<$s;$k++){
						
						if($ans[$k]!=$output4[$k]){
							break;	
						}
					}
					}

	if($k==$s){
		$input=file_get_contents($samplein."$i.txt");
		$ans1=file_get_contents($sampleout."$i.txt");
		
		$pass.="<tr><td>$i</td><td>$input</td><td>$ans1</td><td>$ans1</td><td style='color:green;'>&#x2714</td></tr>";
 }
	else {
		$input=file_get_contents($samplein."$i.txt");
		$ans1=file_get_contents($sampleout."$i.txt");
		$out=file_get_contents($compileoutput);
		$pass.="<tr><td>$i</td><td>$input</td><td>$out</td><td>$ans1</td><td style='color:red;'>&#10060;</td></tr>";
 }

	}
	$pass.="</table></center>";
	//$data2.="sec";
	$pass2="hii how are you";
	$pass1=array($pass,$data2,2);
	echo json_encode($pass1);
	} 
else{
	 $error=str_replace($file.':',"",$error);
    $pass1=array($error,1);
    echo json_encode($pass1);
}
?>

