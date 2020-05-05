<?php

ini_set('error_log', 'errors.log');
session_start();
$userid=$_SESSION['uid'];
$course_id="c";
$folder=$_SESSION['file'];
$question_id=$_SESSION['question'];
$exam_id=$_SESSION['examid1'];
//$question_id=$_POST['d'];
$submission_id=rand(1000000,999999999);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');

//folder formation and file saving part
$file=$folder."submissions/".$userid.'/'.$question_id.'/'."code.c";
		//for insertion of submission_id and file location
		if(!file_exists("$folder/submissions/$userid/$question_id")){
		mkdir("$folder/submissions/$userid/$question_id",0777,true);
		 }
		$y="insert into submited_file values('$submission_id','$file')";
		mysqli_query($con,$y);
		//write data into file
		$fh1=fopen($file,'w');
		fwrite($fh1,$data);  
         fclose($fh1);		
$errorfile=$folder."submissions/".$userid.'/'.$question_id.'/'."error.txt";
$answers=$folder.'questions/'.$question_id.'/'."answers";
$testcases=$folder.'questions/'.$question_id.'/'."testcases";
$executable=$folder.'submissions/'.$userid.'/'.$question_id.'/a';
$output=$folder.'submissions/'.$userid.'/'.$question_id.'/output.txt';
$data2=0;

system("gcc {$file} 2>{$errorfile} ");
$error = file_get_contents($errorfile);
     if($error=='')
        {  
			 for($i=1;$i<11;$i++)
                 {   $ans =file($answers.'/'."answer$i.txt");
	                //running object file
					$y=$testcases.'/'."input$i.txt";
					//$t=microtime(true);
					
					$n=microtime(true);
                    shell_exec("a < {$y} >{$output}");
					$o=microtime(true);
				
					$g=$o-$n; 
					if($g>$data2){
						$data2=$g;	
					}
					$k=0;
					
					$output4=file($output);
					for($k=0;$k<sizeof($ans);$k++){
						if($ans[$k]!==$output4[$k]){
							$wrong++;
							break;
						}
					}
					 if($k==sizeof($ans)){
						  $correct++;
						  }
					 
				 }
		}
//passing the final value to the httpRequest
 $error=str_replace($file.':',"",$error);
 if($correct==0){
	       $wrong1=10;
		}
		else
		{
			$wrong1=10-$correct;
		}
		
	
		$result=mysqli_query($con,"select count(*) as no ,s_id from submission where user_id='$userid' and course_id='$course_id' and exam_id='$exam_id' and question_id='$question_id'");
while($row=mysqli_fetch_assoc($result))
	{
		$nofsub=$row ["no"];       
		$s_id=$row ["s_id"];       
	}
		if($nofsub==1){
		 
		     mysqli_query($con,"update submission set submission_id='$submission_id' ,submission_time=CURRENT_TIMESTAMP(),testcase_satisfied='$correct' ,testcase_not_satisfied='$wrong1',no_of_times=no_of_times+1 where s_id=$s_id");
			 while(mysqli_error($con)!==""){
				 $submission_id=rand(1000000,999999999);
				 mysqli_query($con,"update submission set submission_id='$submission_id' ,testcase_satisfied='$correct' ,testcase_not_satisfied='$wrong1',no_of_times=no_of_times+1 where s_id=$s_id");
			 }
		}
		else{
      
       mysqli_query($con,"insert into submission (user_id,course_id,exam_id,question_id,submission_id,file_location,testcase_satisfied,testcase_not_satisfied) values ('$userid','$course_id','$exam_id','$question_id','$submission_id','$file',$correct,$wrong1)");
		}
		mysqli_close($con);

?>