<?php
include './include/db.php';
$id = $_GET['eid'];
$sql = 'update s_exam set e_status=:sts WHERE eid=:id';
$stmt = $db->prepare($sql);

$sts=0;
$stmt->bindparam(":id",$id);
$stmt->bindparam(":sts",$sts);

$stmt->execute();
header("location:AdminExams.php");

?>



