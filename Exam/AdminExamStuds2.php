<?php
include './include/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ProgramTap</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap2.min.css">
	<link rel="stylesheet" type="text/css" href="Style-ExamStuds.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<?php include './header.php'; ?>
	<div class="clearfix"></div><br/>
	<div class="container">
		
		<a href="AdminExams.php" class="btn btn-success">
      &nbsp; Back to index
    </a>


    <div class="container">
    </div>
    <div class="clearfix"></div></br>
    <div class="parent-container">

     <div class="container-left" style="background: #eeeeee;">
      <div class="cl-title">
       <h3>Students successfully submitted</h3>
       <div class="clearfix"></div><br/>
     </div>
     <?php
     if(isset($_GET['eid'])){

       ?>
       <form  name="sform" id="sform" method="post" action="AdminReset.php">
         <table class="table table-bordered table-responsive" id="finishedExam">
          <thead>
            <tr>
              
              <th><input type="checkbox" name="sample" id="check1" class="selectall"/></th>
              <th style="text-align: center">Roll</th>
              <th style="text-align: center">Name</th>
            </tr>
          </thead>
          <tbody>
           <?php

           $stmt=$db->prepare("select * from s_exam join user on(s_exam.uid=user.uid) where eid=:eid");
           $stmt->execute(array(":eid"=>$_GET['eid']));

           while($row=$stmt->fetch(PDO::FETCH_BOTH)){
            if($row['s_status']=="1"){
              
             ?>
             <tr>
              <td><input type="checkbox"  class="justone"  name="chk[]" value="<?php echo $row['uid'];?>" /></td>
              <td><?php echo $row['uid'];?></td>
              <td><?php echo $row['uname'];?></td>
              <input type="hidden" name="eid" value="<?php echo $row['eid'];?>">
              <input type="hidden" name="e_status" value="<?php echo $row['e_status'];?>">
            </tr> 

            <?php
          }
        }?>
      </tbody>
      
    </table>
    
    <?php
  }

  ?>
  
  <div class="clearfix"></div><br/>

  <input type="submit" value="Reset" id="restart" name="restart" class="btn btn-default">
</form>
<?php

if(isset($_POST["restart"])){
  
  $a=implode(",",$_POST['chk']);
}


?>

</div>




<div class="container-right">
	<div class="cr-title">
   <h3>Students remaining</h3>
   <div class="clearfix"></div>
   <br/>
 </div>
 <?php 
 if(isset($_GET['eid'])){
   ?>

   <table class="table table-bordered table-responsive" id="tableDiv">
    <thead>
      <tr>
        <th style="text-align: center">Roll</th>
        <th style="text-align: center">Name</th>
      </tr>
    </thead>
    <tbody>
     <?php

     $stmt=$db->prepare("select * from s_exam join user on(s_exam.uid=user.uid) where eid=:eid");
     $stmt->execute(array(":eid"=>$_GET['eid']));
     while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      if($row['s_status']=="-1" | $row['s_status']=="0" ){
        
       ?>
       <tr>
        
        <td><?php echo $row['uid'];?></td>
        <td><?php echo $row['uname'];?></td>
        
      </tr> 

      <?php
    }
  }?>
</tbody>
</table>
<?php
}
?>
</div>
</div>
<script type="text/javascript">
	$('.selectall').click(function() {
    if ($(this).is(':checked')) {
      $('input:checkbox').prop('checked', true);
    } else {
      $('input:checkbox').prop('checked', false);
    }
  });
</script>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="DT/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DT/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
   $('#finishedExam').DataTable();
 } );
</script>
<script type="text/javascript">
 $(document).ready(function() {
   $('#tableDiv').DataTable();
 } );
</script>
       <!--<script type="text/javascript">
       	var checkBoxes = $('tbody .justone');
		checkBoxes.change(function () {
    	$('#restart').prop('disabled', checkBoxes.filter(':checked').length < 1);
		});
		checkBoxes.change();
 </script>-->
 <script type="text/javascript">
  $(function(){
   var button=$('#restart');
   button.attr('disabled','disabled');
   $('#check1').change(function(e){
    if(this.checked){
     button.removeAttr('disabled');

   }else{
     button.attr('disabled','disabled');
   }
 });
   $('.justone').change(function(e){
    if(this.checked){
     button.removeAttr('disabled');

   }else{
     button.attr('disabled','disabled');
   }
 });
 });
</script>

</body>
</html>