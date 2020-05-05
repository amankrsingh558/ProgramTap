<?php
session_start();
if(isset($_SESSION['exam'])){
	header('location:exam.php');
	$_SESSION['startexam1']=1;
}
$token=rand(1000,99999);
$_SESSION['startexam']=$token;

?>
<!DOCTYPE html>
<html>
<body>
   
   <form action="exam.php" method="post">
   <input type="hidden" value="<?php echo $token; ?>" name="startexam">
      <input type="submit" style="backgorund-color:green;" >
   </form>
   
</body>
</html>