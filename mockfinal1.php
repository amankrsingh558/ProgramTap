 
 <?php require_once 'templates/header1.php';?>
 
 <?php 


	//if( empty( $_POST )){
		try {
			$user = new Cl_User();
			//$results = $user->getQuestions($_POST  );
			$con = $user->getConnection();
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		} 
		
		
		
		if( $_SESSION['MCQSTATS']==-1)
		{
			header('location:CANDIDATE/MCQs.php');
		}
		
		//echo "INITIAL".$_SESSION['MCQSTATS'];
	$res=0;$i=1;$res1=0;$data=0;
?>


<html lang="en">
  <head>
  <title> Default Quiz</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	
	<link href="css/style.css" rel="stylesheet">
	
	<script src="js/jquery.js"></script>
	
		
	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	
 </head>
  <body> 	
		<center></center>	
 <div class="container">		</div>
	

	  	<script src="basic.js"></script>

<style>

#radio1 {
    visibility: hidden;
}



#sbmts{
	
	
    position:relative;
    margin-top:0%;
    left:80%;
    }
	
	
	
#backbtn,#nextbtn{
	
	
    position:relative;
    margin-top:0%;
    left:10%;
    }

</style>



 <style>
 td{
		font-size:14px;
		padding:4px;
	}
.row{
margin:0px;
}
	
	
      #save_answer_signal2,
      #save_answer_signal1 {
        background-color: #53f442;
      }
	
.questions{
font-size:18px;
}	
	  
	  

</style>








<script>
/*var Timer;
var TotalSeconds;
function CreateTimer(TimerID, Time) {
Timer = document.getElementById(TimerID);
TotalSeconds = Time;

UpdateTimer()
window.setTimeout("Tick()", 1000);
}

function Tick() {
if (TotalSeconds <= 0) {
	console.log(TotalSeconds);
	
 document.getElementById('quiz_form').submit();

return;
}
TotalSeconds -= 1;
UpdateTimer()
window.setTimeout("Tick()", 1000);
}
function UpdateTimer() {
var Seconds = TotalSeconds;
var Days = Math.floor(Seconds / 86400);
Seconds -= Days * 86400;
var Hours = Math.floor(Seconds / 3600);
Seconds -= Hours * (3600);

var Minutes = Math.floor(Seconds / 60);
Seconds -= Minutes * (60);
var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)
Timer.innerHTML = TimeStr;

		   
		   
		       if (TimeStr == "00:01:00") {
          document.getElementById("save_answer_signal1").style.backgroundColor = "red";

        }
        if (TimeStr == "00:00:30") {
          document.getElementById("save_answer_signal2").style.backgroundColor = "red";

        }
		
		
		
		
		if(TimeStr=="00:00:10")
{

 $(document).ready(function() {

  var intval;
  
    intval = setInterval(function(){
       blinkFont(); 
    },500);
 
    setTimeout(function() {

        clearInterval(intval);
}, 10000);
    
    
    
  });
 
}	   
		   
}
function LeadingZero(Time) {

return (Time < 10) ? "0" + Time : + Time;
}
*/
</script>		



<script>
var Timer;
var TotalSeconds;
function CreateTimer(TimerID,Time) {
Timer = document.getElementById(TimerID);
TotalSeconds = Time;

UpdateTimer()
window.setTimeout("Tick()", 1000);
}

function Tick() {
if (TotalSeconds <= 0) {
	console.log(TotalSeconds);
	alert("TIMES UP");
	 document.getElementById('hiddenField').value = 1;
	document.getElementById('quiz_form').submit();    
	
return;
}
TotalSeconds -= 1;
UpdateTimer()
window.setTimeout("Tick()", 1000);
}
function UpdateTimer() {
var Seconds = TotalSeconds;
var Days = Math.floor(Seconds / 86400);
Seconds -= Days * 86400;
var Hours = Math.floor(Seconds / 3600);
Seconds -= Hours * (3600);

var Minutes = Math.floor(Seconds / 60);
Seconds -= Minutes * (60);
var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)
Timer.innerHTML = TimeStr;


	
		
		



		
		
		
		

		   
		   
}
function LeadingZero(Time) {

return (Time < 10) ? "0" + Time : + Time;
}





</script>		








<div style="background:#3D4A5D;padding:4px;color:#ffffff;">

 <div class="save_answer_signal" id="save_answer_signal2"></div>
   <div class="save_answer_signal" id="save_answer_signal1"></div>


<!------------CLOCK--->
<div style="float:right;width:150px; margin-right:10px;" >






 <div id="blink" style="font-size:16px;">Time Left: <span id="timer" ></span></div>
	<script type="text/javascript">window.onload = CreateTimer("timer","<?php echo 10; ?>");</script>
</span>
</div>


<?php
$conc=$_GET['concept'];
//echo $conc;

if($conc=='cb')
	$mcqname='C-BASIC';
else if($conc=='dm')
	$mcqname='Decision Making';
else if($conc=='lo')
	$mcqname='Loops';
else if($conc=='fs')
	$mcqname='Functions';
else if($conc=='ar')
	$mcqname='Arrays';
else if($conc=='po')
	$mcqname='Pointer';
else if($conc=='st')
	$mcqname='Strings';

else if($conc=='su')
	$mcqname='Structures and Unions';

else if($conc=='pm')
	$mcqname='Peprocessors';

else if($conc=='rc')
	$mcqname='Recursion';

else if($conc=='fh')
	$mcqname='File Handling';

else if($conc=='mm')
	$mcqname='Memory Management';


?>





<div style="float:left;width:500px; " >
 <h4><?php  echo $mcqname; ?></h4>
</div>
<div style="clear:both;"></div>
</div>
	
<div style="clear:both;"></div>



  

<?php $questionArray=[];?>
<?php

	
	
	//$sql="select * from mcq ";
	//$result=mysqli_query($con,$sql);



	$c=1;
$ansArray = Array();
$difficulty = Array();
$qidArray=Array();
	$conc=$_GET['concept'];

	
	
	
	
	if($conc)
	{
    $_SESSION['MCQSTATS']=-1;		
	}
	
	 
	//echo $_SESSION['MCQSTATS'];aa
	
	//$rest='ans'.$c;
	
	//$sql="select * from mcq   ORDER BY RAND() limit 3";
	
	$sql="SELECT *, CAST( RIGHT(qid,4) AS unsigned) AS qid_int FROM mcq where qid like 'mt".$conc."%'  ORDER BY RAND() limit 3";
	  $db_res = mysqli_query( $con, $sql );
$data   = $db_res->fetch_all(MYSQLI_ASSOC);
    
	
	foreach ($data as $row)
{
       // echo "<b>". $row['qid'] . "</b><br>";
		//echo "<b>".$row['ques'] . "</b><br>";
		//echo "<b>".$row['ans'] . "</b><br>";
		//echo "<b>".$row['dif'] . "</b><br>";
		
		 $qidArray[]=$row['qid'];
		 
		 
		$qiid=(int)substr($row['qid'],-4);
    $questionArray[]=$qiid;
		
		 $ansArray[] =$row['ans'];
		 $difficulty[]=$row['dif'];
}

//leftmost column
/*foreach ($data as $row)
{
                    echo "<tr>";
        echo "<td>hh".$row['ques'] . "</td>";
                   
                    echo "</tr>";
}*/
	


	?>
	
 
 <div class="row"  style="margin-left:450px;margin-top:30px;">
 <div class="col-md-9">



	<form action="action.php?conc=<?php echo $conc;?>"  method="POST" id="quiz_form" name="myform">
	
<input type='hidden' id= 'hiddenField' name='id' value=0 />  
 <?php
 
 foreach ($data as $row)
 
{

 ?>
 
 
 <div id='q<?php echo $i;?>' class="question_div">
		
		<div class="question_container" >
		
	
				 Question <?php echo $i?><br><br>
		<b><div  class='questions' id="qname<?php echo $i;?>"><?php echo nl2br($row['ques']);?></div></b>	 
		 </div>
		<div class="option_container" >
	
			 			 
		<div class="op">

		<table>
		<tr><td>
		A)		

		 </td><td><input type="radio" value="1" id='radio1_<?php echo $row['qid'];?>'      name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b style="font-size:18px;"><?php echo nl2br($row['opt1']);?></b>

		</td></tr></table>
		
		</div>
		
			 
			 
			 			 
		<div class="op">	
		<table>
		<tr><td>
		B)			

	
		 </td><td>  <input type="radio" value="2" id='radio1_<?php echo $row['qid'];?>' name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b style="font-size:18px;"><?php echo nl2br($row['opt2']);?></b>

		</td></tr></table>
		</div>			 
		<div class="op">	
		<table>
		<tr><td>
		C)		
	
		 </td><td> <input type="radio" value="3" id='radio1_<?php echo $row['qid'];?>' name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b style="font-size:18px;"><?php echo nl2br($row['opt3']);?></b>

		</td></tr></table>
		
		</div>
		
			 
			 
			 			 
		<div class="op">
		
		

			
		<table>
		<tr><td>
		D)		
			

 </td><td><input type="radio" value="4" id='radio1_<?php echo $row['qid'];?>' name='<?php echo (int)substr($row['qid'],-4);?>'/>&nbsp;&nbsp;<b style="font-size:18px;"><?php echo nl2br($row['opt4']);?></b>
 
		</td></tr></table>



		
		</div>	

 <input type="radio" value="5" id='radio1' name='<?php echo (int)substr($row['qid'],-4);?>'  checked />
		 
		</div> 
 </div>


 	<?php 
	$i++;}	  
					?>
 

	
	
	<!------------------------------------------------------------------------------------------->
	
	<INPUT TYPE="hidden" NAME="input_name" VALUE="<?= base64_encode(serialize($questionArray)); ?>">
	<INPUT TYPE="hidden" NAME="qid_name" VALUE="<?= base64_encode(serialize($qidArray)); ?>">
		<INPUT TYPE="hidden" NAME="ans_name" VALUE="<?= base64_encode(serialize($ansArray)); ?>">
		
		<INPUT TYPE="hidden" NAME="diff_name" VALUE="<?= base64_encode(serialize($difficulty)); ?>">

	<!--<input type="submit" value="SUBMIT" name="submit" />-->

	
</div>


	
	
 </div>
 </div>

<div class="footer_buttons" style="background:#3D4A5D;" id="btns">
	


	
	<button class="btn btn-info" style="cursor:pointer;" id="sbmts"  style="margin-top:2px;" type="submit"  name="submitform">Submit Exam</button>
	
	</form>
	<button class="btn btn-success"  id="backbtn" style="visibility:hidden;" onClick="javascript:show_back_question();"  style="margin-top:2px;" >Back</button>
	
	<button class="btn btn-success" id="nextbtn"  onClick="javascript:show_next_question();" style="margin-top:2px;" >Next</button>
	
</div>

	<script>


///////////////////////////////////////////////
	<!--<button class="btn btn-success" id="nextbtn" type="submit" value="SUBMIT" name="submit" onClick="javascript:show_next_question();" style="margin-top:2px;" >Next</button>-->

//////////////////////////////////////////////


noq="<?php echo sizeof($questionArray)+1;?>";
show_question('1');


 
</script>
	
<!--<div  id="warning_div" style="padding:10px; position:fixed;z-index:100;display:none;width:100%;border-radius:5px;height:200px; border:1px solid #dddddd;left:4px;top:70px;background:#ffffff;">
<center><b> Do you really want to submit this quiz?</b> <br><br>
<span id="processing"></span>

<a href="javascript:cancelmove();"   class="btn btn-danger"  style="cursor:pointer;">Cancel</a> &nbsp; &nbsp; &nbsp; &nbsp;


        <button class="btn btn-info" style="cursor:pointer;" onClick="submit_quiz();">Submit Exam</button>

</center>
</div>
-->
<script>
    /*function submit_quiz() {
 

        alert("submit");

        $('#processing').html("Processing...<br>");


        setTimeout(function() {
          window.location.href = "resultcheck.php";
        }, 3000);
      }*/
    </script>




	

<script language="javascript" type="text/javascript">
if (window.history && history.pushState) {
    addEventListener('load', function() {
        history.pushState(null, null, null); // creates new history entry with same URL
        addEventListener('popstate', function() {
            var stayOnPage = confirm("Would you like to leave page Changes will not be saved?");
            if (stayOnPage) {
                history.back() 
            } else {
                history.pushState(null, null, null);
            }
        });    
    });
}




 
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	