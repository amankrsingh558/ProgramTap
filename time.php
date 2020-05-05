 
 <?php require_once 'templates/header1.php';?>
 
 <?php 

session_start();
	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		
	
?>
 
 
 

<?php 
/*session_start();
$con = mysqli_connect('localhost','root');
  if($con)
  echo 'connected';
   	mysqli_select_db($con,'pandav');
*/
   
 
   $str_time=$_POST['time'];
 $eid=$_POST['eid'];
//$str_time = "00:02:00";

$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $str_time);

sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

$h = $hours * 3600 + $minutes * 60 + $seconds;
   
   
 // echo "<script>alert('".$h."');</script>"
	//$h=$_GET['id'];
           $query = mysqli_query($con,"update s_exam set timer='".$h."' where eid='".$eid."' and e_status='1' and uid='".$_SESSION['uid']."'");
		   if($query)
			   echo "inserted";
		   
	  
 ?> 