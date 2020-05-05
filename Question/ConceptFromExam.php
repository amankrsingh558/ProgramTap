<html>



<?php
$eid=$_GET['eid'];
$uid=$_GET['uid'];
$indcol=0;
  include_once("theConnection.php");

 $qry="SELECT   `qid1`, `qid2`,  `qid3`, `qid4`,  `qid5`,  `qid6`,  `qid7`,  `qid8`, 
	 `qid9`,  `qid10`  FROM `s_exam` where uid='$uid' and eid='$eid'";
   $va=$con->query($qry);
$row = $va->fetch_row();
 ?>
	  <table border="1"><tr> <?php
	  $a=0;$b=0;$c=0;$d=0;$e=0;$f=0;$g=0;$h=0;$i=0;$j=0;$k=0;$l=0;$m=0;
  while($indcol<10){
	  $cncpt=substr($row[$indcol],2,2);
	 if($cncpt=="cb"){ if($a==1){ $indcol+=1; continue;} $a=1;
	 echo "<td onclick='drawChart1(0)'>C Basic</td>";  }
	 if($cncpt=="dm"){ if($b==1){ $indcol+=1; continue;}  $b=1;
	 echo "<td onclick='drawChart1(9)'>Decision Making</td>"; }
	 if($cncpt=="lo"){ if($c==1){ $indcol+=1; continue;}  $c=1;
	 echo "<td onclick='drawChart1(6)'>Loops</td>";  }
	 if($cncpt=="fs"){ if($d==1){ $indcol+=1; continue;}  $d=1;
	 echo "<td onclick='drawChart1(12)'>Functions and Scope</td>"; }
	 if($cncpt=="ar") { if($e==1){ $indcol+=1; continue;}  $e=1;
	 echo "<td onclick='drawChart1(3)'>Array</td>"; }
	 if($cncpt=="po"){ if($f==1){ $indcol+=1; continue;}  $f=1;
     echo "<td onclick='drawChart1(15)'>Pointers</td>"; }
	 if($cncpt=="st") { if($g==1){ $indcol+=1; continue;}  $g=1;
	 echo "<td onclick='drawChart1(18)'>String</td>"; }
	 if($cncpt=="su") { if($h==1){ $indcol+=1; continue;}  $h=1;
	 echo "<td onclick='drawChart1(21)'>Structures and Unions</td>";  }
	 if($cncpt=="pm")  { if($i==1){ $indcol+=1; continue;}  $i=1;
	 echo "<td onclick='drawChart1(24)'>Preprocessor and Micros</td>";  }
	 if($cncpt=="rc"){ if($j==1){ $indcol+=1; continue;}  $j=1;
	 echo "<td onclick='drawChart1(27)'>Recursion</td>";  }
	 if($cncpt=="fh") { if($k==1){ $indcol+=1; continue;}  $k=1;
	 echo "<td onclick='drawChart1(30)'>File Handling</td>";  }
	 if($cncpt=="mm") { if($l==1){ $indcol+=1; continue;}  $l=1;
	 echo "<td onclick='drawChart1(33)'>Memory Management</td>"; }
	 if($cncpt=="ms") { if($m==1){ $indcol+=1; continue;}  $m=1;
	 echo "<td onclick='drawChart1(36)'>Miscelleneous</td>"; }
	 
	   $indcol+=1;
  
   }
?>
 </tr>
	  </table>
</html>
