 
 <?php require_once 'templates/header1.php';?>
 
 <?php 


	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		
	$res=0;$i=1;$res1=0;$data=0;
?>


<style>

#radio1 {
    visibility: hidden;
}
</style>

<?php $questionArray=[];?>
<?php
echo "<br><br><br><br>";
	
echo "<br><br><br><br>";
	
	
	
	$sql="select * from mcq ";
	//$result=mysqli_query($con,$sql);



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
        echo "<td>hh".$row['ques'] . "</td>";
                   
                    echo "</tr>";
}*/
	


	?>
	

	<form action="action.php" method="post">
	
	
	<!----------------------------------------------------------------------------->
 <?php
 
 foreach ($data as $row)
 
{
	//echo "jhh";
	//echo $row['qid'];

 ?>
 
 
 <div id='q<?php echo $i;?>' class="question_div">
		
		<div class="question_container" >
		
	
				 Question <?php echo $i?><br>
		<b><div  class='questions' id="qname<?php echo $i;?>"><?php echo $row['ques'];?></div></b>	 
		 </div>
		<div class="option_container" >
	
			 			 
		<div class="op">

		<table>
		<tr><td>
		A)		

		 </td><td><input type="radio" value="1" id='radio1_<?php echo $row['qid'];?>'      name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo $row['opt1'];?></b>

		</td></tr></table>
		
		</div>
		
			 
			 
			 			 
		<div class="op">	
		<table>
		<tr><td>
		B)			

	
		 </td><td>  <input type="radio" value="2" id='radio1_<?php echo $row['qid'];?>' name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo $row['opt2'];?></b>

		</td></tr></table>
		</div>			 
		<div class="op">	
		<table>
		<tr><td>
		C)		
	
		 </td><td> <input type="radio" value="3" id='radio1_<?php echo $row['qid'];?>' name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo $row['opt3'];?></b>

		</td></tr></table>
		
		</div>
		
			 
			 
			 			 
		<div class="op">
		
		

			
		<table>
		<tr><td>
		D)		
			

 </td><td><input type="radio" value="4" id='radio1_<?php echo $row['qid'];?>' name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo $row['opt4'];?></b>
 
		</td></tr></table>



		
		</div>	

 <input type="radio" value="5" id='radio1' name='<?php echo (int)substr($row['qid'],-4);?>'  checked />
		 
		</div> 
 </div>


 	<?php 
	$i++;}	  
					?>
 
 
 
	
	
	<!------------------------------------------------------------------------------------------->
	
	<INPUT TYPE="hidden" NAME="input_name" VALUE="<?= base64_encode(serialize($questionArray)); ?>">
	<INPUT TYPE="hidden" NAME="qid_name" VALUE="<?= base64_encode(serialize($qidArray)); ?>">
		<INPUT TYPE="hidden" NAME="ans_name" VALUE="<?= base64_encode(serialize($ansArray)); ?>">
		
		<INPUT TYPE="hidden" NAME="diff_name" VALUE="<?= base64_encode(serialize($difficulty)); ?>">

	<input type="submit" value="SUBMIT" name="submit" />

	</form>

	

	
	</html>
	
	
	
	
	
	
	
	
	
	

	
	