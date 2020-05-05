



       <div class="clearfix"></div></br>

       <div class="container" id="table">
       		<table class="table table-bordered table-responsive" id="table1">
       			<tr >
       			
       			<th style="text-align: center">Exam Name</th>
       			<th style="text-align: center">Duration</th>
       			
       			<th style="text-align: center">Available Ques.</th>
       			
       			<th style="text-align: center">Date</th>
				<th style="text-align: center">Status</th>
       			
       		</tr>
			
			
				<?php 
				$type=$_POST['type'];
				$today = date("Y-m-d");
				
				
			$con=mysqli_connect('localhost','root');
             mysqli_select_db($con,'pandav');	
	$qrryy="select * from exam where eid like '$type%'";
	$getval=$con->query($qrryy);
	$p=0;
	  while($roww = $getval->fetch_row()){  
       
	   $date=$roww[3];
	   


	   
		?>
	   <tr>
	   <?php if(($date>=$today) || ($roww[9]==0)){
		   
	   ?>
	     <td style="text-align: center;font-weight:normal;" onclick="" name="col" ><?php echo "$roww[2]"; ?></td>
		  <td  style="text-align: center;font-weight:normal;"onclick=")" name="col" ><?php echo "$roww[8]"; ?></td>
		    <td style="text-align: center;font-weight:normal;" onclick="" name="col" ><?php  
                    if($type=="p");{
						$con1=mysqli_connect('localhost','root');
                         mysqli_select_db($con1,'compiler');
						$result1=mysqli_query($con1,"select no_of_question from practical_exam where exam_id='$roww[1]'");
			                while($row=mysqli_fetch_assoc($result1))
	                     {
		                  $nofsub=$row ["no_of_question"];       
                           echo $nofsub;   
	                    }
						mysqli_close($con1);
					   }

              else{

			$result=mysqli_query($con,"select count(*) as no from mc where eid='$roww[1]'");
			  while($row=mysqli_fetch_assoc($result))
	                 {
		              $nofsub=$row ["no"];       
                      echo $nofsub;   
	                 }

                 }					 ?>
					 
					 </td>
			  <td style="text-align: center;font-weight:normal;" onclick="" name="col" ><?php echo "$roww[3]"; ?></td>
			  
			  <td style="text-align: center;">
			  <?php
               if($nofsub<$roww[4]){
				?>

                <button type="button"  onclick="add('<?php echo $roww[1]; ?>')" id="bt"  value="Schedule Exam" class="btn btn-primary" style="background-color:red;width:140px;">Add Question</button>
				
					
				<?php	
				}
				
			
			  
			  
			   elseif($date>$today)
			  {
			     if($roww[9]==1)
			  {?>
			  <button type="button"  onclick="" id="bt"  value="Schedule Exam" class="btn btn-primary" style="background-color:green;width:140px;">Re-Schedule</button>
				
			  <?php }
			      else{
					  ?>
					  <button type="button"  onclick="fetch(this)" id="bt"  value="Schedule Exam" class="btn btn-primary" style="width:140px;">Shedule Exam</button>
				<?php  }
			   
				
			   }

			  else {
				  if(($roww[9]==0) && ($nofsub==$roww[4]) ){
					  ?>
					  <button type="button"  onclick="fetch(this)" id="bt"  value="Schedule Exam" class="btn btn-primary" style="width:140px;">Shedule Exam</button>
				 <?php }
				 else {
					 echo "Completed";
					 }
				  ?>
				  	
			  <?php }?>
			  </td>
		 </tr>
	   <?php
	  



	  
	  } }
?>
			
			
			
			
			
			
       		

       		
       		</table>
       </div>
