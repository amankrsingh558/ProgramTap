
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
$storeArray = Array();
$difficulty = Array();
	while($c<=3)
	{
	$rest='ans'.$c;
	
	//$sql="select * from mcq   ORDER BY RAND() limit 3";
	
	$sql="SELECT *, CAST( RIGHT(qid,4) AS int) AS qid_int FROM mcq   ORDER BY RAND() limit 3";
	
	$db_res = mysqli_query( $con, $sql );
$data   = mysqli_fetch_all(MYSQLI_ASSOC);


foreach ($data as $row)
{
        echo "<td>". $row['ques'] . "</td>";
}

//leftmost column
foreach ($data as $row)
{
                    echo "<tr>";
        echo "<td>". $row['qid'] . "</td>";
                    
                    echo "</tr>";
}
$c++;
	}
?>

	
	
	
	
	
	

  
	

	

	
	
	
	
	
	
	
	
	
	
	
	

	
	