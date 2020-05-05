
<?php

$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'copiler');
 $q="select file_location from submited_file where submission_id='888935638'";
 $result=mysqli_query($con,$q);
 while($row=mysqli_fetch_assoc($result))
	{
		$nofsub=$row ["file_location"];
	
	       
	}
	$data=file_get_contents($nofsub);
   echo $data;

	
	


?>


