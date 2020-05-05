<?php
include_once("theConnection.php");
   $uid=$_POST['roll'];
   $conid=$_POST['conid'];
   

    $qry="SELECT  `eid`, `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, 
	`res8`, `qid9`, `res9`, `qid10`, `res10`, `qid11`, `res11`, `qid12`, `res12`, `qid13`, `res13`, `qid14`, `res14`, `qid15`, `res15`, `qid16`, `res16`, `qid17`, `res17`, `qid18`, `res18`, `qid19`, `res19`, `qid20`, `res20`, `qid21`, `res21`, `qid22`, `res22`, `qid23`, `res23`, `qid24`, `res24`, `qid25`, `res25`, `qid26`, `res26`, `qid27`, `res27`, `qid28`, `res28`, `qid29`, `res29`, `qid30`, `res30`,
	`qid31`, `res31`, `qid32`, `res32`, `qid33`, `res33`, `qid34`, `res34`, `qid35`, `res35`, `qid36`, `res36`, `qid37`, `res37`, `qid38`, `res38`, `qid39`, `res39`, `qid40`, `res40`, 
	`qid41`, `res41`, `qid42`, `res42`, `qid43`, `res43`, `qid44`, `res44`, `qid45`, `res45`, `qid46`, `res46`, `qid47`, `res47`, `qid48`, `res48`, `qid49`, `res49`, `qid50`, `res50` FROM `s_exam` where uid='$uid' and s_status=1 limit 5";
   $vall=$con->query($qry);

   $indcol=0;
   $index=0;
   
  
   
   while($index<15){
	   $an[$index]=0;
	   $index+=1;
   }
  $y=0;          // Returns Total marks Exam wise and concept
  
	  while($row = $vall->fetch_row()){
		  
		  $eid=$row[0];
		      $q="select count(*) from mcq where eid='$eid'";
   $v=$con->query($q);
   $r = mysqli_fetch_array($v);
   $n=$r[0]*2;
   
   $indcol=1;
   		      $qg="select ename from exam where eid='$eid'";
   $vg=$con->query($qg);
   $rg = mysqli_fetch_array($vg);
   
   $an[$y]=$rg[0];
  while($indcol<$n){
	  
	  
	  $cncpt=substr($row[$indcol],2,2);

	  if($conid==$cncpt){
		//  echo "<h1>---$conid----$cncpt--- </h1>";
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  if($val)
		  $an[$y+1]=$an[$y+1]+$val;
	       else
		$an[$y+2]=$an[$y+2]+1;
	  }
	   $indcol+=2;
  
   }
    $y+=3;
  }

  
  
  
   function isright($b,$i,$con){
	   $u=0;
	   $tqry="select ans,dif from mcq where qid='$b'";
	  $vall=$con->query($tqry);
	  $rw = mysqli_fetch_array($vall);
	  
	  $eid=$GLOBALS['eid'];
	  $tqryc="select easy,medium,difficult from exam where eid='$eid'";
	  $vallc=$con->query($tqryc);
	  $rwc = mysqli_fetch_array($vallc);
	  
	  if($rw[1]==1)
		  $u=$rwc[0];
	  else if($rw[1]==2)
		  $u=$rwc[1];
	  else if($rw[1]==3)
		  $u=$rwc[2];
	  
	  
	  if($rw[0]==$i){
		  return $u;
	  }
	  else{
		  return 0;
	  }
   }
  echo JSON_encode($an);
 
 /* while($y>=0){
	echo "<h1> $y  ->  $an[$y]</h1>";  
	$y--;
  }*/