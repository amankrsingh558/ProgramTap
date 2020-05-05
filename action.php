 <?php require_once 'templates/header2.php';?>
 
 <?php  include './header.php';?>
<?php 
error_reporting(E_ALL ^ E_NOTICE);

	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		
		} 
		$correct=0;$unanswered=0;$marks=0;$size=0;
	
?>






<html lang="en">
  <head>
  <title> Result</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="errorstyle.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<script>
	

	</script>
	
	<!-- jquery -->
	<script src="js/jquery.js"></script>
	
		<style>
body {
    background-color: #ccffff;
}

</style>
	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<body>
 
<?php 
$responsearray=[];$i=0;


if($_POST)
{
	//echo "hellloooo";
}
	
if((isset($_POST['submitform']))|| $_POST["id"]==1)
{
	//echo "submitted";


$quesarray = unserialize(base64_decode($_POST["input_name"]));
//echo $array;
$ques= implode(',',$quesarray);
//echo "qusetion<br>";
//echo $ques;
//echo "<br>";

$qidarray = unserialize(base64_decode($_POST["qid_name"]));
//echo $array;
$qid= implode(',',$qidarray);
//echo $qid;
//echo "<br>";


$diffarray = unserialize(base64_decode($_POST["diff_name"]));
//echo $array;
$diff= implode(',',$diffarray);
//echo "Difficulty<br>";
//echo $diff;
//echo "<br>";

$ansarray = unserialize(base64_decode($_POST["ans_name"]));
//echo $array;
$ans= implode(',',$ansarray);
//echo "Answer<br>";
//echo $ans;
//echo "<br><br>";
$size=sizeof($qidarray);
//echo "size".$size;
//echo "<br>";
//echo $quesarray[1];
while($size)
{
$responsearray[] = $_POST["$quesarray[$i]"];
$size--;$i++;
}
/*$passed_array =($_POST['input_name']);
echo "success".$passed_array;*/
//echo "QUESTIONS PASSED";
//echo implode(', ', (array)$ret);
//$//ques= implode(',', (array)$passed_array);
//echo $ques;

/*
while($c<=3)
	
	{   $storeArray[]=$_POST['answer'.$c];
    
   $c++;
	}
	$stringv= implode(',', $storeArray);
echo $stringv;	


*/


//echo "response";echo "<br>";
$response= implode(',',$responsearray);
//echo $response;
$marks=0;

$totscore=0;

$size=sizeof($qidarray);
$k=0;$correct=0;$unanswered=0;
while($k<$size)
{
//	echo "<br>";
//echo "question ".$quesarray[$k]."  answerarray " .$ansarray[$k]."  difficulty array ".$diffarray[$k]."  responsearray ".$responsearray[$k];

$totscore+=$diffarray[$k];
if($ansarray[$k]==$responsearray[$k])
{
	$marks+= $diffarray[$k];
	//echo "hello";
	$correct++;
}
else if($responsearray[$k]==5)
{
$unanswered++;
}
$k++;
}
//echo "<br>Marks=";

//echo $marks;




//echo $_SESSION['uid'];

$uid=$_SESSION['uid'];

$conc=$_GET['conc'];

//echo $conc;
//echo $uid;




$sql="update mock set $conc=$marks  where uid='$uid' ";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
 
	
$sql1="SELECT cb+dm+lo+fs+ar+po+st+su+pm+rc+fh+mm+ms AS 'Total'
FROM mock where uid='$uid'";
$res = mysqli_query($con,$sql1) or die(mysqli_error($con));
$row=mysqli_fetch_row($res);
//echo "total".$row[0];
$tot=$row[0];
	
$sql="update mock set total=$tot  where uid='$uid'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
 
	
}
	
	
	
?>



<!-- On rows -->


	<!-- Latest compiled and minified CSS -->
	<br>
	
	 <a href="/ProgramTap/CANDIDATE/MCQs.php"><button type="button" class="btn btn-primary">Back</button></a>

	<center><H2>Your Score</h2></center>
<center><table class="table" border="2px" style="width:550px;margin-top:50px;">

<!-- On cells (`td` or `th`) -->

<tr>

  <td class="success"><b>Right Answers<b></td>
  <td class="danger"><b>Wrong Answers</b></td>
  <td class="info"><b>Unanswered</b></td>
  <td class="active"><b>Score</b></td>
  </tr>
  
  <tr>
  
  <?php
  
  if($size==0)
  {
  header('location:CANDIDATE/MCQs.php');
  exit();
  
  }
  ?>
  <td class="success"><b><?php echo $correct; ?><b></td>
  <td class="danger"><b><?php echo ($size-$unanswered-$correct); ?></b></td>
  <td class="info"><b><?php echo $unanswered; ?></b></td>
  <td class="active"><b><?php echo $marks; ?> / <?php echo $totscore; ?></b></td>
  </tr>
  <!-- On rows -->

</table></center>
</body>

</html>