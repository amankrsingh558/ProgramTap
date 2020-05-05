<?php
session_start();
if(!isset($_SESSION['exam'])){
	header('location:home.php');
	die();
}
$token=rand(1000,99999);
$_SESSION['examtoken']=$token;

?>
<!DOCTYPE html>
<html>
<body>
   <h3>
       Are you sure to submit the exam?
   
   </h3>
   <form action="preresult.php" method="post">
   <input type="hidden" value="<?php echo $token; ?>" name="mediater">
      <input type="submit" style="backgorund-color:green;" >
   </form>
   <form action="practical.php">
	  <input type="submit" style="backgorund-color:green;" value="Cancel">
   </form>
</body>
</html>
