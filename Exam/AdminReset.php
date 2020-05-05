<?php
include './include/db.php';
$eid=$_POST['eid'];
$a = $_POST['chk'];
$e_status=$_POST['e_status'];
if($e_status==1){
 foreach ($a as $b) {
	$sts=0;
	$str="location:AdminExamStuds.php?eid=".$eid;
	$msg="<div class='alert alert-danger'>
		<strong>Sorry</strong>Do you wish to continue
		</div>";
	if($crud->update($b,$sts,$eid)){
			header($str);
			}
			else{
				header($str);
				
			}
		}
		}else if($e_status==0){
			$str="location:AdminExamStuds.php?eid=".$eid;
			header($str);
			
		}else{
			$str="location:AdminExamStuds.php?eid=".$eid;
			header($str);
			
}
		

?>



