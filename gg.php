
<?php require_once 'templates/header1.php';?>
<?php 
error_reporting(E_ALL ^ E_NOTICE);
//echo "STATUS".$_SESSION['status'];

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
	$sql="SELECT eid from s_exam  where e_status=1 and uid='".$_SESSION['uid']."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res))
    {
		$eid=$row[0];
    //echo $row[0];
    }

?>
<?php
//echo "hiii".$_SESSION['uid'];

if($_SESSION['status']==1)
{
header('location:/ProgramTap/CANDIDATE/index.php');
exit;
}
 
 
if(isset($_POST['start'])){
		
		$quer="update s_exam set s_status='-1'   where eid='".$eid."' and e_status=1 and uid='".$_SESSION['uid']."' ";
	mysqli_query($con,$quer);

		try {
			$user_obj = new Cl_User();
			//$data = $user_obj->ExamStatus();
			if($_SESSION['status']==-1){
				//$_SESSION['success'] = 'You are logged in successfully';
				//echo "<script>alert('hello')</script>";
				header('Location:gg.php');exit;
				
				
				
			}
			
			else{
				header('Location:home.php');exit;
			}
			
		} catch (Exception $e) {
			$error = $e->getMessage();
			$_SESSION['error'] = $error;
		}
	}
	
	
	
	//print_r($_SESSION);
	/*if(isset($_SESSION['status']) && $_SESSION['status']){
		
		echo "<script>alert('hello')</script>";
		
		header('Location: gg.php');exit;
	}*/

?>
<html lang="en">
  <head>
  <title> Default Quiz</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="errorstyle.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<script>
	

	</script>
	
	<!-- jquery -->
	<script src="js/jquery.js"></script>
	
		
	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	

	

 </head>
  <body>
		<center></center>	
 <div class="container">		</div>
	

	  	<script src="basic.js"></script>
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
</style>

<script>
var Timer;
var counter=0;
var TotalSeconds;
function CreateTimer(TimerID, Time) {
Timer = document.getElementById(TimerID);
TotalSeconds = Time;

UpdateTimer()
window.setTimeout("Tick()", 1000);
}

function Tick() {
if (TotalSeconds <= 0) {
	
	
	
	
	 
 var eid="<?php echo $eid; ?>";

        $.ajax({
          url: "insertexamstatus.php",
          method: "POST",
          data: {
            resp: 1,eid:eid
          }


        });
		
		
		
		
		
		  $.ajax({
            url: "destroyexam.php"

          });
		  alert("TIMES UP!");
		
		   window.location.href = "home.php";

       // alert("submit");

        
      
		
	
return;
}
/////////////////////////popup
 //window.onblur = function() {
   //     window.blurred = true;
		 //    win= window.open("tt.php","MyWindow","config='toolbar=no, menubar=no,scrollbars=no,resizable=no,location=no,directories=no,atus=no,width=300px,height=250px'");


////////////////////////
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
counter++;
Timer.innerHTML = TimeStr;

if(counter==6)
{counter=0;
var eid="<?php echo $eid; ?>";
			$.ajax({  
                url:"time.php",  
                method:"POST",  
                data:{time:TimeStr,eid:eid}
                
                  
           }); 
		   
		   
}
		       if (TimeStr == "00:01:00") {
          document.getElementById("save_answer_signal1").style.backgroundColor = "red";

        }
        if (TimeStr == "00:00:30") {
          document.getElementById("save_answer_signal2").style.backgroundColor = "red";

        }
		
		
		/////////////////////////////////////////////////////
		
		
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
function blinkFont() {
    var curColor = document.getElementById("blink").style.color;
    var curBgC = document.getElementById("blink").style.background;
    var x=document.getElementById("blink").style.color = curColor === "red" ? "#ffffff" : "red";

}

		
		/////////////////////////////////////////////////////////
		
		

		   
		   
}
function LeadingZero(Time) {

return (Time < 10) ? "0" + Time : + Time;
}




</script>		
		<?php 
  
		
		$i=1;
               
	
  if($con)
 // echo 'connected';

   
  // echo $_SESSION['uid'];
   $query = "select * from mcq ";
	$res=mysqli_query( $con,$query);					   
	if(isset($_POST['start']))
{
	$quer="update s_exam set uid='".$_SESSION['uid']."' ";
	mysqli_query($con,$quer);
}									
?>




	<?php 

   $query = "select s_status,timer from s_exam where eid='".$eid."' and e_status='1' and uid='".$_SESSION['uid']."' ";
	$res=mysqli_query( $con,$query);
	if($res)
	{
//echo "hello";	
	}
$value =  mysqli_fetch_assoc($res);
	//echo $value['e_status'];
	//echo $value['timer'];
	
	$sstatus=$value['s_status'];
	
	if($sstatus==-1)
	{
		
		$timer=$value['timer'];
		
		
		
	}
	/*else{
	$timer=20;
	}*/
								
?>
<!------------------------------------changed --->


<?php
	$sql="SELECT eid from s_exam  where e_status=1 and uid='".$_SESSION['uid']."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res))
    {
		$eid=$row[0];
    //echo $row[0];
    }

?>

<?php
$sql="SELECT * from exam where eid='".$eid."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     $rows = mysqli_num_rows($res);
	 
	 $value =  mysqli_fetch_assoc($res);
	//echo $value['e_status'];
	//echo $value['timer'];
	
	$ename=$value['ename'];
	
	//echo $noq;


?>	 




	<?php 

 /* $query = "select * from s_exam where eid='$eid' ";
	$res=mysqli_query( $con,$query);
	if($res)
	{
//echo "hello";	
	}
 while ($row=mysqli_fetch_assoc($res))
 {
	
$ename=$row['ename'];
$date=$row['date'];
$noq=$row['noq'];
$duration=$row['duration'];
$easy=$row['easy'];
$medium=$row['medium'];
$difficult=$row['difficult'];
 }*/
?>

<!------------------------------------changed --->
<div class=" " >



<div style="background:#3D4A5D;padding:4px;color:#ffffff;">

 <div class="save_answer_signal" id="save_answer_signal2"></div>
   <div class="save_answer_signal" id="save_answer_signal1"></div>


<!------------CLOCK--->
<div style="float:right;width:150px; margin-right:10px;" >






 <div id="blink" style="font-size:16px;">Time Left: <span id="timer" ></span></div>
	<script type="text/javascript">window.onload = CreateTimer("timer","<?php echo $timer; ?>");</script>
</span>
</div>
<!-------------------->







<div style="float:left;width:280px;font-size:25px " >
Exam Name: <?php echo  $ename;?>  
</div>

<div style="float:left;width:350px;font-size:25px;position:relative;left:600px;" >
Name:   <?php echo $_SESSION['uname']; ?>  
</div>

<div style="clear:both;"></div>
</div>
	
<div style="clear:both;"></div>



   
 
 <div class="row"  style="margin-top:0px;">
 <div class="col-md-9">










<form method="post" action="home.php" id="quiz_form" >

 <?php 
 $sql="SELECT *, CAST( RIGHT(qid,4) AS UNSIGNED) AS qid_int FROM mcq where eid='".$eid."' and  qid like 'et%'   ORDER BY qid_int";
	$res = mysqli_query($con,$sql) or die(mysqli_error());
     $rows = mysqli_num_rows($res);
 
 		
   ?>
 
 
 
 
 	<?php 
					
					
                while($result=mysqli_fetch_array($res)){?>

 
 
 
 
 <div id='q<?php echo $i;?>' class="question_div">
		
		<div class="question_container" >
		
	
				 Question <?php echo $i?><br>
		<b><div  class='questions' id="qname<?php echo $i;?>"><?php echo nl2br($result['ques']);?></div></b>	 
		 </div>
		<div class="option_container" >
	
			 			 
		<div class="op">

		<table>
		<tr><td>
		A)		

		 </td><td><input type="radio" value="1" id='radio1_<?php echo $result['qid'];?>'      name='<?php echo (int)substr($result['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo nl2br($result['opt1']);?></b>

		</td></tr></table>
		
		</div>
		
			 
			 
			 			 
		<div class="op">	
		<table>
		<tr><td>
		B)			

	
		 </td><td>  <input type="radio" value="2" id='radio1_<?php echo $result['qid'];?>' name='<?php echo (int)substr($result['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo nl2br($result['opt2']);?></b>

		</td></tr></table>
		</div>			 
		<div class="op">	
		<table>
		<tr><td>
		C)		
	
		 </td><td> <input type="radio" value="3" id='radio1_<?php echo $result['qid'];?>' name='<?php echo (int)substr($result['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo nl2br($result['opt3']);?></b>

		</td></tr></table>
		
		</div>
		
			 
			 
			 			 
		<div class="op">
		
		

			
		<table>
		<tr><td>
		D)		
			

 </td><td><input type="radio" value="4" id='radio1_<?php echo $result['qid'];?>' name='<?php echo (int)substr($result['qid'],-4);?>'/>&nbsp;&nbsp;<b><?php echo nl2br($result['opt4']);?></b>
 
		</td></tr></table>
		
		</div>
			 
		</div> 
 </div>


 	<?php $i++;
					}   
					?>
 </form>
 </div>
 
 
  <div class="col-md-3" style="min-height:84%;padding:5px;color:#212121;background:#CEDDF0;">

  
 <?php $j=1; ?>
	<div style="max-height:60%;overflow-y:auto;">
	
					
					<?php while($j<$i){?>
						<div class="qbtn" onClick="javascript:show_question('<?php echo $j;?>');" id="qbtn<?php echo $j;?>" ><?php echo ($j);?></div>

						
					<?php $j++; }?>
			<div style="clear:both;"></div>

	</div>
	
	
	<br>
	<hr>
	<br>
	<div>
	

	
<table>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#449d44;">&nbsp;</div> Answered  </td></tr>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#c9302c;">&nbsp;</div> UnAnswered  </td></tr>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#ec971f;">&nbsp;</div> Review-Later (RL)  </td></tr>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#212121;">&nbsp;</div> Not-visited  </td></tr>
</table>
	<div style="clear:both;"></div>

	</div>

 </div>
 </div>
</div>
<style>

</style>

<div class="footer_buttons" style="background:#3D4A5D;" id="btns">
	<button class="btn btn-warning"   onClick="javascript:review_later();" style="margin-top:2px; margin-left:990px;" >Review Later</button>
	


	<button class="btn btn-success"  id="backbtn" style="visibility:hidden;" onClick="javascript:show_back_question();"  style="margin-top:2px;" >Back</button>
	
	<button class="btn btn-success" id="nextbtn" onClick="javascript:show_next_question();" style="margin-top:2px;" >Next</button>
	
	<button class="btn btn-info"  onClick="javascript:cancelmove();" style="margin-top:2px;" >Submit Exam</button>
</div>

<?php
	$sql="SELECT eid from s_exam  where e_status=1 and uid='".$_SESSION['uid']."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     while ($row=mysqli_fetch_row($res))
    {
		$eid=$row[0];
    //echo $row[0];
    }

?>

<?php
$sql="SELECT * from exam where eid='".$eid."'";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
     $rows = mysqli_num_rows($res);
	 
	 $value =  mysqli_fetch_assoc($res);
	//echo $value['e_status'];
	//echo $value['timer'];
	
	$noq=$value['noq']+1;
	
	//echo $noq;


?>	 '	



<script>


///////////////////////////////////////////////

//////////////////////////////////////////////


noq="<?php echo $noq;?>";
show_question('1');


 
</script>

<div  id="warning_div" style="padding:10px; position:fixed;z-index:100;display:none;width:100%;border-radius:5px;height:200px; border:1px solid #dddddd;left:4px;top:70px;background:#ffffff;">
<center><b> Do you really want to submit this quiz?</b> <br><br>
<span id="processing"></span>

<a href="javascript:cancelmove();"   class="btn btn-danger"  style="cursor:pointer;">Cancel</a> &nbsp; &nbsp; &nbsp; &nbsp;


        <button class="btn btn-info" style="cursor:pointer;" onClick="submit_quiz();">Submit Exam</button>

</center>
</div>

    <script>
      function submit_quiz() {
 var eid="<?php echo $eid; ?>";

        $.ajax({
          url: "insertexamstatus.php",
          method: "POST",
          data: {
            resp: 1,eid:eid
          }


        });
		
		
		
		
		
		  $.ajax({
            url: "destroyexam.php"

          });
		
		

       // alert("submit");

        $('#processing').html("Processing...<br>");


        setTimeout(function() {
          window.location.href = "home.php";
        }, 3000);
      }
    </script>







 

<center></center>










<script>	

	 
$(document).ready(function(){
		 
		 
		 
	
		 
	$("input:radio").click(function(){
      if ($(this).is(":checked")){
		  
		  
      var id1=$(this).attr('id');
	   var name1=$(this).attr('name');
	//  alert("idradio="+id1);
	 // alert("name="+name1);
	  ////////////////////////////////////
		var dd=$(this).val();
		//alert("response="+dd);
		
		var qid=$(this).attr('name');
		//alert("qid="+qid);
		
		
		
		
		  var sub=parseInt(id1.substr(id1.length-2));
	   if(isNaN(sub))
	   sub=parseInt(id1.substr(id1.length-1));
		
		
	//	var qidpass="qid"+sub;
	//alert("passs="+sub);
	
	var eid="<?php echo $eid; ?>";
	      
           $.ajax({  
                url:"insertpandav.php?qid="+sub,  
                method:"POST",  
                data:{resp:dd,eid:eid}
                
                  
           }); 
		
	  //alert("id1="+id1);   
	 
	   //alert("sub="+sub);
	  
	   var btnid="qbtn"+sub;
	  //alert(btnid);
	    // var nam=$(this).attr('name');
		// alert("nameee="+nam);
		 
	  document.getElementById(btnid).style.backgroundColor ='rgb(68, 157, 68)';
       } 
	});
		  });
	

	
	
		
		
	</script>

 <script>
      (function() {
        var time = 10000,
          delta = 1000,
          tid; 

        tid = setInterval(function() {
          if (!window.blurred) {
            time = 5000;
            return;
          }

          time -= delta;
          console.log(time);
          //console.log(TotalSeconds);
		  
		  
		  
		  if (time <= 0) {
            clearInterval(tid);
         
var eid="<?php echo $eid; ?>";

            $.ajax({
              url: "insertexamstatus.php",
              method: "POST",
              data: {
                resp: 1,eid:eid
              }


            });
			
			
			
			
		  $.ajax({
            url: "destroyexam.php"

          });
			
			
			
            alert("You have Cheated");
			//win.close();
			
			window.location.href="home.php";
			
			
			
			
			
          
            return;
          }
        }, delta);
      })();
 var win;
 
 

      window.onblur = function() {
        window.blurred = true;
		
		
		
		if(TotalSeconds>=10){
		  // win= window.open("error.html","Error Window","config='toolbar=no, menubar=no,scrollbars=no,resizable=no,location=no,directories=no,atus=no,width=300px,height=250px'");
		win=popupwindow(300,200);
		
	
		
		
		function popupwindow(w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open("error.html","ERROR", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
		}
      };
	  
	  
	  
      window.onfocus = function() {
        window.blurred = false;
		win.close();
      };
	  
	  
	  
	 
	  
	  
	  
	  $('body').bind('copy paste',function(e) {
    e.preventDefault(); return false; 
});
	  
	  
	  
	  
    </script>

</body>










<?php



if($sstatus==-1)
{
	
	//echo "<h1>Hello</h1>";
$c=1;
//$result = mysqli_query($con,"SELECT * FROM s_exam where eid='e0001' and e_status='1' and uid='".$_SESSION['uid']."' ");

$result = mysqli_query($con,"SELECT * FROM s_exam where  e_status='1'  and s_status=-1 and uid='".$_SESSION['uid']."' ");
$storeArray = Array();
while ($row = mysqli_fetch_array($result)) {
	while($c<=$noq)
	{
	$rest='res'.$c;
	 $rr=$row[$rest];
	if($rr=='')
		$rr=9;
	
	if($rr!=9)
	{
    $storeArray[] =$rr; 
	//echo $rest."= ".$rr." ,";
	echo "<script>$('input:radio[name=".$c."][value=".$rr."]').attr('checked',true);</script>";
	
		//echo "<script>$('input:radio[name=2][value=4]').attr('checked',true)</script>";
		$btnid="qbtn".$c;

		echo "<script>document.getElementById('".$btnid."').style.backgroundColor ='rgb(68, 157, 68)'</script>";

	}
	
	

$c++;	
}


//echo '<br>';
}

}
?>




</html>


	
	
	
	

	
	
	
	<script>
	
	
	(function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }
	
	
	
	
	
	

})(window);
	
	</script>

