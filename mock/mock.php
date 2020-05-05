 
 <?php require_once 'templates/header.php';?>
 
 <?php 


	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		
	$res=0;$i=1;$res1=0;
?>

<?php $questionArray=[];?>
<?php
echo "<br><br><br><br>";
	
echo "<br><br><br><br>";
	
	
	
	$sql="select * from mcq ";
	$result=mysqli_query($con,$sql);



	$c=1;
$ansArray = Array();
$difficulty = Array();
$qidArray=Array();
	
	//$rest='ans'.$c;
	
	//$sql="select * from mcq   ORDER BY RAND() limit 3";
	
	$sql="SELECT *, CAST( RIGHT(qid,4) AS int) AS qid_int FROM mcq   ORDER BY RAND() limit 3";
	  $db_res = mysqli_query( $con, $sql );
$data   = $db_res->fetch_all(MYSQLI_ASSOC);
    
	
	foreach ($data as $row)
{
        echo "<b>". $row['qid'] . "</b><br>";
		echo "<b>".$row['ques'] . "</b><br>";
		echo "<b>".$row['ans'] . "</b><br>";
		echo "<b>".$row['dif'] . "</b><br>";
		
		 $qidArray[]=$row['qid'];
		 
		 
		$qiid=(int)substr($row['qid'],-4);
    $questionArray[]=$qiid;
		
		 $ansArray[] =$row['ans'];
		 $difficulty[]=$row['dif'];
}

//leftmost column
/*foreach ($data as $row)
{
                    echo "<tr>";
        echo "<td>".$row['ques'] . "</td>";
                   
                    echo "</tr>";
}
	*/
	//$data   = $db_res->fetch_all(MYSQLI_ASSOC);
	
	
	
		/*  echo "ques";
		  echo $result['ques'];
		  echo "<br>";
	  

	
	
	
	
	
	
	//$result=mysqli_query($con,$sql);
	
	//while($rowans = mysqli_fetch_array($result))
	
	
	
	$qid=$result['qid'];
	 $rr=$result['ans'];                          
	$rr1=$result['dif'];
	echo $qid;	echo "Question=".(int)substr($qid,-4);
	
	$qiid=(int)substr($qid,-4);
    $questionArray[]=$qiid;
    $storeArray[] =$rr; 
	$difficulty[]=$rr1;
	echo $rest."= ".$rr." ,  ";
	echo "diffi= ".$rr1." || ";
	echo "<br>";
	
	*/
	

	?>
	
	
	
	
	<?php
	//echo $res1;
	
	
		
	
	
	//$result=mysqli_query($con,$sql);
	
	//while($rowans = mysqli_fetch_array($result))
	?>
	<form action="action.php" method="post">
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<INPUT TYPE="hidden" NAME="input_name" VALUE="<?= base64_encode(serialize($questionArray)); ?>">
	<INPUT TYPE="hidden" NAME="qid_name" VALUE="<?= base64_encode(serialize($qidArray)); ?>">
		<INPUT TYPE="hidden" NAME="ans_name" VALUE="<?= base64_encode(serialize($ansArray)); ?>">

	<input type="submit" value="SUBMIT" name="submit" />

	</form>

	

	
	
	
	
	
	
	
	
	
	
	
	

	
	