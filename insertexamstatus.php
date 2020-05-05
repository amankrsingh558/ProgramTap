 
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

/*$con = mysqli_connect('localhost','root');
  if($con)
  echo 'connected';
   	mysqli_select_db($con,'pandav');

  */
   
   
     $h=$_POST['resp'];
	 $eid=$_POST['eid'];
   
 // echo "<script>alert('".$h."');</script>"
	//$h=$_GET['id'];
           $query = mysqli_query($con,"update s_exam set s_status='".$h."' where eid='".$eid."' and e_status='1'  and uid='".$_SESSION['uid']."'");
		   if($query)
			   echo "inserted";
		   
	  
 ?> 