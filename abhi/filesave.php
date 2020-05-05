<?php
$userid="abhi123456";
$course_id="c1";
$exam_id="e1";
$question_id=$_POST['d'];
$submission_id=rand(1000000,999999999);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'copiler');

 //for checking the no of submission of the same question
 
$q="select count(*) as noofsubmission from  solution where userid='$userid' and course_id='$course_id' and exam_id='$exam_id' and question_id='$question_id' ";
$result=mysqli_query($con,$q);

while($row=mysqli_fetch_assoc($result))
	{
		$nofsub=$row ["noofsubmission"]+1;       
	}
	
	//folder formation and file saving part
$my_file = "code$nofsub.c";
$file=$userid.'/'.$course_id.'/'.$exam_id.'/'.$question_id.'/'."submissions".'/'.$my_file;
		//for insertion of submission_id and file location
		if(!file_exists("abhi123456/c1/e1/q3/submissions")){
		mkdir("abhi123456/c1/e1/q3/submissions",0777,true);
		 }
		$y="insert into submited_file values('$submission_id','$file')";
		mysqli_query($con,$y);
		//write data into file
		$fh1=fopen($file,'w');
		fwrite($fh1,$data);
		fclose($fh1);
		//file_put_contents("abhi1111.txt","hiii");
   //find argument of malloc function
    $line = file($file);
		//if(strpos($line,'malloc')!==false){
		foreach($line as $line){	
			if(strpos($line,'malloc')!==false){
		$start=strpos($line,"malloc")+6;
		for($l=$start;$l<strlen($line);$l++)
		{
			if($line[$l]=="("){
			$start1=$l+1;
		}
		if($line[$l]==")"){
			$end=$l;
		    }
		}
		$k=$end-$start1;
		$f=substr($line,$start1,$k);
		file_put_contents("hellooo.txt",$f);
		     }
		}
		?>