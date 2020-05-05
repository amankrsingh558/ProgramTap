<html>

 <link rel="stylesheet" href="AdminTableStyle.css">
<?php
$ert=$_GET['val'];
$s=$_GET['start'];

  echo $ert;
  include_once("theConnection.php");


	  $qry="SELECT SI, uid, uname,branch, year, email FROM `user` WHERE branch='$ert' limit $s,20";
   $val=$con->query($qry);
   $s++;
?>
<table border="2" class="tble" id="tble">
<tr><th>SI</th><th>Roll Number</th><th>Name</th><th>Branch</th><th>Year</th><th>Email</th></tr>
<?php

  while($row = $val->fetch_row()){   ?>
    <tr onclick="rowColIndex(this)" class="rop">  
	   
       <td class="op"><?php echo "$s" ?></td>     <td class="op"><?php echo "$row[1]" ?></td>   
	   <td class="op"><?php echo   "$row[2]"?></td>  
	   <td class="op"><?php  echo  "$row[3]";?></td>  
        <td class="op"><?php echo "$row[4]" ?></td>    <td class="op"><?php echo "$row[5]" ?></td>    
		
		
</tr>		
<?php	
$s++;	
}	 
?>

</table>
</form>
<form method="post" action="AdminStudProfile.php" id="submitForm">
<input type="hidden" id="regToSend" name="roll" >
</form>
<h1 id="t"></h1>
</center>
</body>
</html>
