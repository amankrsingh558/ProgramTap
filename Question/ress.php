<?php
   $sr="localhost";
   $un="root";
   $psd="";
   $db="pandav";
   
  
   $con=new mysqli($sr,$un,$psd,$db);
   
   if($con->connect_error){
	   die("Database connection failed".$con->connect_error);
   }
   
   // $eid="e1002";
	//$uid="CS160058";
	$eid=$_POST['eid'];
	$uid=$_POST['roll'];
    $qry="SELECT  `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, 
	`res8`, `qid9`, `res9`, `qid10`, `res10` FROM `s_exam` WHERE uid='$uid' and eid='$eid'";
   $val=$con->query($qry);
   $row = mysqli_fetch_array($val);

 /*  $cb[1]=0;  $cb[0]=0;           //0-1-2   C Basic
   $ar[1]=0;  $ar[0]=0;            // 3-4-5   Array                   Decision MAking
   $lo[1]=0;  $lo[0]=0;          //    6-7-8  loop  
   $dm[1]=0;  $dm[0]=0;          //    9-10-11  Decision Making        function and scope
   $fs[1]=0;  $fs[0]=0;          //    12-13-14  Functions and scope     Array
   $po[1]=0;  $po[0]=0;          //    15-16-17  Pointers
   $st[1]=0;  $st[0]=0;          //    18-19-20  String
   $su[1]=0;  $su[0]=0;          //    21-22-23  Structures and Unions
   $pm[1]=0;  $pm[0]=0;          //    24-15-26  Preprocessor and macros and Type Casting
   $rc[1]=0;  $rc[0]=0;          //    27-28-29  Recurssion
   $fh[1]=0;  $fh[0]=0;          //    30-31-32  File handling
   $mm[1]=0;  $mm[0]=0;          //    33-34-35  Memory Management
   $ms[1]=0;  $ms[0]=0;          //    36-37-38  Miscelaneous
   */
   

   $indcol=0;
   $index=0;
   while($index<39){
	   $an[$index]=0;
	   $index+=1;
   }
  while($indcol<20){
	   $cncpt=substr($row[$indcol],2,2);
	   
	   if($cncpt=="cb"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[1]=$an[1]+$val;
	       else
		  $an[0]=$an[0]+1;
	    $an[2]="Basic C";
	   }
	   
	   else if($cncpt=="ar"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[4]=$an[4]+$val;
	       else
		  $an[3]=$an[3]+1;
	     $an[5]="Array";
	   }
	   
	   else if($cncpt=="lo"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[7]=$an[7]+$val;
	       else
		  $an[6]=$an[6]+1;
	  $an[8]="Loop";
	   }
	   
	   else if($cncpt=="dm"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[10]=$an[10]+$val;
	       else
		  $an[9]=$an[9]+1;
	  $an[11]="Decision Making";
	   }
	   
	   	   else if($cncpt=="fs"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[13]=$an[13]+$val;
	       else
		  $an[12]=$an[12]+1;
	  $an[14]="Functions and Scope";
	   }
	   
	   	   else if($cncpt=="po"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[16]=$an[16]+$val;
	       else
		  $an[15]=$an[15]+1;
	  $an[17]="Pointers";
	   }
	   
	    else if($cncpt=="st"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[19]=$an[19]+$val;
	       else
		  $an[18]=$an[18]+1;
	  $an[20]="String";
	   }
	   
	    else if($cncpt=="su"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[22]=$an[22]+$val;
	       else
		  $an[21]=$an[21]+1;
	  $an[23]="Structure and Unions";
	   }
	   
	    else if($cncpt=="pm"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[25]=$an[25]+$val;
	       else
		  $an[24]=$an[24]+1;
	  $an[26]="Preprocessor and Macros";
	   }
	   
	    else if($cncpt=="rc"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[28]=$an[28]+$val;
	       else
		  $an[27]=$an[27]+1;
	  $an[29]="Recurssion";
	   }
	   
	    else if($cncpt=="fh"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[31]=$an[31]+$val;
	       else
		  $an[30]=$an[30]+1;
	  $an[32]="File and Handling";
	   }
	   
	    else if($cncpt=="mm"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[34]=$an[34]+$val;
	       else
		  $an[33]=$an[33]+1;
	  $an[35]="Memory Management";
	   }
	   
	   	   
	    else if($cncpt=="ms"){
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[37]=$an[37]+$val;
	       else
		  $an[36]=$an[36]+1;
	  $an[38]="Miscellenous";
	   }
	   
	   $indcol+=2;
   }
   
  
   function isright($b,$i,$con){
	   $tqry="select ans from mcq where qid='$b'";
	  $vall=$con->query($tqry);
	  $rw = mysqli_fetch_array($vall);
	  if($rw[0]==$i){
		  return 1;
	  }
	  else{
		  return 0;
	  }
   }
  echo JSON_encode($an);
 