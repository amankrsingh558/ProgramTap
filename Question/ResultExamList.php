
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php session_start(); ?>
 <?php include_once("theConnection.php");?>

  <script src="js/bootstrap.min.js"></script>


<style>
table #ex{
    empty-cells: hide;
	border:collapse;
}


#myInput {
    border-radius: 25px;
    outline: none;
}

</style>




     <style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}
</style>

<!----------------------ch------------------------------------------->
	

<?php 
  $highest=0;$count=0;$sum=0;
$examselect= $_POST['examselect'];

 //$uid="CS160012";
	
    //$eid="e0001";
	//	$eid=$_SESSION['eid'];
	/*$uid="CS160012";*/
	$e="select eid from s_exam where eid='$examselect'";
   $ee=$con->query($e);
   ?>
   
      
	 
	  

	  
	<?php
		while($ree = mysqli_fetch_array($ee)){
			
			
			
			
			
	    //  $eid=$ree[0];

	
   $q="select count(*) from mcq where eid='$examselect'";
   $v=$con->query($q);
   $r = mysqli_fetch_array($v);
   $n=$r[0]*2;

   $qb="select * from exam where eid='$examselect'";
   $vb=$con->query($qb);
   $rb = mysqli_fetch_array($vb);
   
   
   /* $qry="SELECT  `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, 
	`res8`, `qid9`, `res9`, `qid10`, `res10` FROM `s_exam` WHERE uid='$uid' and eid='$examselect'";
	*/
		//}
	/////////////////////////////////////////////////////////////////////////////////////////////
	
	$qry="SELECT `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, `res8`, `qid9`, `res9`, `qid10`, `res10`, `qid11`, `res11`, `qid12`, `res12`, `qid13`, `res13`, `qid14`, `res14`, `qid15`, `res15`, `qid16`, `res16`, `qid17`, `res17`, `qid18`, `res18`, `qid19`, `res19`, `qid20`, `res20`, `qid21`, `res21`, `qid22`, `res22`, `qid23`, `res23`, `qid24`, `res24`, `qid25`, `res25`, `qid26`, `res26`, `qid27`, `res27`, `qid28`, `res28`, `qid29`, `res29`, `qid30`, `res30`, `qid31`, `res31`, `qid32`, `res32`, `qid33`, `res33`, `qid34`, `res34`, `qid35`, `res35`, `qid36`, `res36`, `qid37`, `res37`, `qid38`, `res38`, `qid39`, `res39`, `qid40`, `res40`, `qid41`, `res41`, `qid42`, `res42`, `qid43`, `res43`, `qid44`, `res44`, `qid45`, `res45`, `qid46`, `res46`, `qid47`, `res47`, `qid48`, `res48`, `qid49`, `res49`, `qid50`, `res50`, `timer`, `s_status`, `e_status` FROM `s_exam` where eid='$examselect'";
	
		
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////
	
	
   $val=$con->query($qry);
   $row = mysqli_fetch_array($val);


   $indcol=0;
   $index=0;
   $total=0;

  while($indcol<$n){
	   
	  
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  
		
	   
	   $indcol+=2;
   }
   
   
   ?>
          	<!--<tr>
		
			  <td style="text-align: center"><?php  //echo "$total"; ?></td>
			
			</tr>-->
   
		<?php
		
		
		
		
		}
		
		
		?>
		
		

       		
       	
			
			           


<!------------ch----------------------------------------------------->



 
<?php
$examselect= $_POST['examselect'];
$branchselect= $_POST['branchselect'];

$yearselect= $_POST['yearselect'];


$sql="SELECT * from exam where eid='$examselect'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     $row=mysqli_fetch_assoc($res);
	
		 
	 $sql2="SELECT uid from s_exam where eid='$examselect'";
	$res2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
   
	 
	
	

?>


<b style="font-size:16px;">Exam Name:    <?php echo $row['ename'];  ?>&nbsp;&nbsp;&nbsp;&nbsp;Type:  <?php if($examselect[0]=='e')
{echo "Theory";
}
else if($examselect[0]=='p')
{
	echo "Practical";
}
	?>  <br>Total Marks:&nbsp;<?php echo $total; ?>

<br>Highest Marks: <span id="highest"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Average Marks: <span id="average"></span></b>


<br><br>
 
 
 <input  id="myInput" type="text" placeholder="Search..">
 <br><br>
<table class="table" id="ex" class="pagination" >
  <thead>
    <tr>
      
      <th scope="col">Roll No.</th>
      <th scope="col">Student Name</th>
      <th scope="col">Year</th>
	   <th scope="col">Branch</th>
	    <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <tr>
     
	 
	   <?php while($row2=mysqli_fetch_assoc($res2))
	   {
		   $uid=$row2['uid'];
		   
		   
		   
		   /////////////////////changed/////////////////////////////////////////////
		   $e="select eid from s_exam where uid='$uid'";
             $ee=$con->query($e);
		   
		   
		   while($ree = mysqli_fetch_array($ee)){
			   
			   
			   	
	      $eid=$ree[0];

	
   $q="select count(*) from mcq where eid='$examselect'";
   $v=$con->query($q);
   $r = mysqli_fetch_array($v);
   $n=$r[0]*2;

   $qb="select * from exam where eid='$examselect'";
   $vb=$con->query($qb);
   $rb = mysqli_fetch_array($vb);
   
   $qry="SELECT  `qid1`, `res1`, `qid2`, `res2`, `qid3`, `res3`, `qid4`, `res4`, `qid5`, `res5`, `qid6`, `res6`, `qid7`, `res7`, `qid8`, 
	`res8`, `qid9`, `res9`, `qid10`, `res10` FROM `s_exam` WHERE uid='$uid' and eid='$examselect'";
   $val=$con->query($qry);
   $row = mysqli_fetch_array($val);


   $indcol=0;
   $index=0;
   $total=0;
   $marks=0;
 
    while($indcol<$n){
	   
	  
		  $val=isright($row[$indcol],$row[$indcol+1],$con);
		  
		  
		  $marks=$marks+$val;
		  
		  
		  
	   
	   $indcol+=2;
   }
   
   
   
   
   
 
		   }
		   
		   
		  
		   
		   
		   ////////////////////////////////////changed////////////////////////////////////////////////////////////
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   if($yearselect!='' && $branchselect!='')
		    $sql3="SELECT * from user where uid='$uid' and branch='$branchselect'  and year like '$yearselect%' ";
		
			
		  else if($yearselect=='' && $branchselect!='')
		    $sql3="SELECT * from user where uid='$uid'  and branch='$branchselect'" ;
		
			  else if($yearselect!='' && $branchselect=='')
		    $sql3="SELECT * from user where uid='$uid'  and year like'$yearselect%'" ;
		
		 else if($yearselect=='' && $branchselect=='')
		    $sql3="SELECT * from user where uid='$uid'" ;
		
			
			
			
		
		
	$res3 = mysqli_query($con,$sql3) or die(mysqli_error($con));
   $row3=mysqli_fetch_assoc($res3);
	 
		   
		   if($row3['uid']=='')
			   continue;
		   
		   
?>		   
      <td><?php echo $row3['uid'];$count++;?></td>
     <td><?php echo $row3['uname'];?></td>
      <td><?php echo $row3['year'];?></td>
	   <td><?php echo $row3['branch'];?>
	  
	  <td> 
	  
	  
	  <?php  if($highest<=$marks)
		  
		  {
			  $highest=$marks;
			   
		  }
		  
	  ?>
   <?php echo "$marks";$sum=$sum+$marks;?>
   
   </td>
	  
    </tr>
	<?php 
	   }
	   ?>
   
  </tbody>
</table>

<?php
//echo "SUM".$sum;
//ECHO "<br>";

echo "<script type='text/javascript'>document.getElementById('highest').innerHTML=('$highest')</script>";
if($highest==0)
{
	$avg=0;
}
else{
$avg=number_format((float)$sum/$count, 2, '.', '');
}
echo "<script type='text/javascript'>document.getElementById('average').innerHTML=('$avg')</script>";



?>
<script>


</script>










<!------------------------------------------------->



			
			           
					   
					  
	

      
	
</body>
</html>


		
		<?php
   function isright($b,$i,$con){
	   $u=0;
	   $tqry="select ans,dif from mcq where qid='$b'";
	  $vall=$con->query($tqry);
	  $rw = mysqli_fetch_array($vall);
	  
	  $eid=$GLOBALS['examselect'];
	  $tqryc="select easy,medium,difficult from exam where eid='$eid'";
	  $vallc=$con->query($tqryc);
	  $rwc = mysqli_fetch_array($vallc);
	  
	  if($rw[1]==1)
		  $u=$rwc[0];
	  else if($rw[1]==2)
		  $u=$rwc[1];
	  else if($rw[1]==3)
		  $u=$rwc[2];
	  
	  $GLOBALS['total']=$GLOBALS['total']+$u;
	  if($rw[0]==$i){
		  return $u;
	  }
	  else{
		  return 0;
	  }
   }
	
  ?>			
  
  
 

       <script type="text/javascript">
         /*    $(function(){
    $("#ex").exTable();
 WORKING
})*/


/*$(document).ready(function(){
    $('#ex').after('<div id="nav"></div>');
    var rowsShown = 4;
    var rowsTotal = $('#ex tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
    }
    $('#ex tbody tr').hide();
    $('#ex tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function(){

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#ex tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
});*/
</script>

       
	   
	   
	   
	   
	   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script> 
<script src="jqui/jquery-ui.min.js"></script>
<script type="text/javascript" src="paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#ex').paging({limit:20});
				
				
				
            });
        </script>
	   
	   
	   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



/*var count=$('#ex tr:not(:empty)').length
//var count1=$("tr:empty)").length;
var count1 = $('#ex tr').length;

alert("not empty  "+count);
alert("empty  "+count1)*/
</script>
	   