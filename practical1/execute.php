<?php
session_start();
$userid="abhi123456";
$course_id="c";
$exam_id="e1";
$folder=$_SESSION['file'];
$question_id=$_SESSION['question'];
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
$errorfile=$folder."/submissions/".$userid.'/'.$question_id.'/'."error.txt";
$answers=$folder.'/questions/'.$question_id.'/'."answers";
$testcases=$folder.'/questions/'.$question_id.'/'."testcases";
$data2=0;

system("gcc {$file} 2>{$errorfile} ");
$error = file_get_contents($errorfile);
     if($error=='')
        {  
			 for($i=1;$i<11;$i++)
                 {   $ans =file_get_contents($answers.'/'."answer$i.txt");
	                //running object file
					$y=$testcases.'/'."input$i.txt";
					//$t=microtime(true);
					$n=microtime(true);
                    $x=shell_exec("a < {$y}");
					$o=microtime(true);
					$g=$o-$n; 
					if($g>$data2){
						$data2=$g;
						
					}
					 if($x==$ans){
						  $correct++;
						  }
					 else{
						  $wrong++;
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
       $z="insert into submission (user_id,course_id,exam_id,question_id,submission_id,file_location,testcase_satisfied,testcase_not_satisfied) values ('$userid','$course_id','$exam_id','$question_id','$submission_id','$file',$correct,$wrong1)";
       mysqli_query($con,$z);
		mysqli_close($con);

?>