<?php
session_start();
$course_id="c";

$file=$_SESSION['file'];
$difficulty_level="HARD";
$q=0;

$concept_id=$_POST['concept'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');
$result=mysqli_query($con,"select count(*) as no from practical_question where  question_id like 'mp$concept_id%'");
while($row=mysqli_fetch_assoc($result))
	{
		$noof_ques=$row ["no"];       
	    
      function count_digit($number) {
       return strlen($number);
             }

        $no=$noof_ques+1;
          
           $num ="$no";
           $number_of_digits = count_digit($num); 
		   if($number_of_digits==1){
           $q="000".$no;	
		   }	
        elseif($number_of_digits==2){
           $q="00".$no;	
		   }		
         elseif($number_of_digits==3){
           $q="0".$no;	
		   }
           else{
           $q=$no;	
		   }		   
	}
	
$question_id="mp".$concept_id.$q;
if(!file_exists("$file/$concept_id/$question_id")){
		mkdir("$file/$concept_id/$question_id",0777,true);
		mkdir("$file/$concept_id/$question_id/testcases",0777,true);
		mkdir("$file/$concept_id/$question_id/answers",0777,true);
		 }

$testcase=$file.'/'.$concept_id.'/'.$question_id.'/testcases/';
$answer=$file.'/'.$concept_id.'/'.$question_id.'/answers/';

$question=$_POST['question'];
$samplein1=$_POST['samplein1'];
$samplein2=$_POST['samplein2'];
$sampleout1=$_POST['sampleout1'];
$sampleout2=$_POST['sampleout2'];
$input1=$_POST['input1'];
$input2=$_POST['input2'];
$input3=$_POST['input3'];
$input4=$_POST['input4'];
$input5=$_POST['input5'];
$input6=$_POST['input6'];
$input7=$_POST['input7'];
$input8=$_POST['input8'];
$input9=$_POST['input9'];
$input10=$_POST['input10'];
$output1=$_POST['output1'];
$output2=$_POST['output2'];
$output3=$_POST['output3'];
$output4=$_POST['output4'];
$output5=$_POST['output5'];
$output6=$_POST['output6'];
$output7=$_POST['output7'];
$output8=$_POST['output8'];
$output9=$_POST['output9'];
$output10=$_POST['output10'];

$location=$file.'/'.$concept_id.'/'.$question_id.'/question.txt';

//file creation
$fh=fopen($file.'/'.$concept_id.'/'.$question_id.'/question.txt','w');
	fwrite($fh,$question);  
     fclose($fh);
	 
	 $fh=fopen($file.'/'.$concept_id.'/'.$question_id.'/samplein1.txt','w');
	fwrite($fh,$samplein1);  
     fclose($fh);
	 
	$fh=fopen($file.'/'.$concept_id.'/'.$question_id.'/samplein2.txt','w');
	fwrite($fh,$samplein2);  
     fclose($fh);
	 
	 $fh=fopen($file.'/'.$concept_id.'/'.$question_id.'/sampleout1.txt','w');
	fwrite($fh,$sampleout1);  
     fclose($fh); 
	 
	 $fh=fopen($file.'/'.$concept_id.'/'.$question_id.'/sampleout2.txt','w');
	fwrite($fh,$sampleout2);  
     fclose($fh);


	$fh=fopen($testcase.'input1.txt','w');
	fwrite($fh,$input1);  
     fclose($fh);
	 $fh=fopen($testcase.'input2.txt','w');
	fwrite($fh,$input2);  
     fclose($fh);
	 $fh=fopen($testcase.'input3.txt','w');
	fwrite($fh,$input3);  
     fclose($fh);
	 $fh=fopen($testcase.'input4.txt','w');
	fwrite($fh,$input4);  
     fclose($fh);
	 $fh=fopen($testcase.'input5.txt','w');
	fwrite($fh,$input5);  
     fclose($fh);
	 $fh=fopen($testcase.'input6.txt','w');
	fwrite($fh,$input6);  
     fclose($fh);
	 $fh=fopen($testcase.'input7.txt','w');
	fwrite($fh,$input7);  
     fclose($fh);
	 $fh=fopen($testcase.'input8.txt','w');
	fwrite($fh,$input8);  
     fclose($fh);
	 $fh=fopen($testcase.'input9.txt','w');
	fwrite($fh,$input9);  
     fclose($fh);
	 $fh=fopen($testcase.'input10.txt','w');
	fwrite($fh,$input10);  
     fclose($fh);
	 $fh=fopen($answer.'answer1.txt','w');
	fwrite($fh,$output1);  
     fclose($fh);
	 $fh=fopen($answer.'answer2.txt','w');
	fwrite($fh,$output2);  
     fclose($fh);
	 $fh=fopen($answer.'answer3.txt','w');
	fwrite($fh,$output3);  
     fclose($fh);
	 $fh=fopen($answer.'answer4.txt','w');
	fwrite($fh,$output4);  
     fclose($fh);
	 $fh=fopen($answer.'answer5.txt','w');
	fwrite($fh,$output5);  
     fclose($fh);
	 $fh=fopen($answer.'answer6.txt','w');
	fwrite($fh,$output6);  
     fclose($fh);
	 $fh=fopen($answer.'answer7.txt','w');
	fwrite($fh,$output7);  
     fclose($fh);
	 $fh=fopen($answer.'answer8.txt','w');
	fwrite($fh,$output8);  
     fclose($fh);
	 $fh=fopen($answer.'answer9.txt','w');
	fwrite($fh,$output9);  
     fclose($fh);
	 $fh=fopen($answer.'answer10.txt','w');
	fwrite($fh,$output10);  
     fclose($fh);
	 
//database updation	 

mysqli_query($con,"insert into practical_question (course_id,question_id,file_location,difficulty_level,status) values('$course_id','$question_id','$location','$difficulty_level',0)");
//mysql_close($con);

header('location:/ProgramTap/QUESTION/practical_question.php');


?>