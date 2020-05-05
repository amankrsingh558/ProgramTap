<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
<?php
   $sr="localhost";
   $un="root";
   $psd="";
   $db="pandav";
   
  
   $con=new mysqli($sr,$un,$psd,$db);
   
   if($con->connect_error){
	   die("Database connection failed".$con->connect_error);
   }
 
    $eid="e0001";
	$uid="CS160012";
	session_start();
//	$eid=$_SESSION['eid'];
	//$uid=$_SESSION['roll'];
	
   $q="select count(*) from mcq where eid='$eid'";
   $v=$con->query($q);
   $r = mysqli_fetch_array($v);
   $n=$r[0]*2;

   
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
   $total=0;
   $marks=0;
  while($indcol<$n){
	   
	  
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  $marks=$marks+$val;
	   
	   $indcol+=2;
   }
   
  
   function isright($b,$i,$con){
	   $tqry="select ans,dif from mcq where qid='$b'";
	  $vall=$con->query($tqry);
	  $rw = mysqli_fetch_array($vall);
	  $GLOBALS['total']=$GLOBALS['total']+$rw[1];
	  if($rw[0]==$i){
		  return $rw[1];
	  }
	  else{
		  return 0;
	  }
   }
  ?>
        		<table border="2">
       			<thead>
                        <tr>
       			
       			<th style="text-align: center">Exam ID</th>
       			<th style="text-align: center">Date</th>
       			<th style="text-align: center">Total Marks</th>
       			<th style="text-align: center">Obtained Marks</th>
       			
       			
       		</tr>
       		</thead>
       		<tr>
			  <td><?php  echo "$eid"; ?></td>
			  <td><?php  echo "2018-2-2"; ?></td>
			  <td><?php  echo "$total"; ?></td>
			  <td><?php  echo "$marks"; ?></td>
			</tr>
       		
       		</table>