<?php
 //error_reporting(0);
session_start();
if(!((isset($_POST['startexam'])|| $_SESSION['startexam1']) && isset($_SESSION['startexam']))){

	
	header('location:/ProgramTap/index.php');
	die();
}
$uiid=$_SESSION['uid'];
$_SESSION['exam']=0;
$token=rand(1000,99999);
$_SESSION['examtoken']=$token;

//$_SESSION['userid']="abhi123456";
$course_id="c";
$exam_id=$_POST['examid'];
$_SESSION['examid1']=$exam_id;
//$question_id=$_POST['d'];
$_SESSION['file']='practical'.'/'.$course_id.'/exam/'.$exam_id.'/';


					 $p=array();

                  $con1=mysqli_connect('localhost','root');
                 mysqli_select_db($con1,'compiler');
                   $result=mysqli_query($con1,"select q1,q2,q3,q4,q5 from practical_exam where exam_id='$exam_id'");
                    while($row=mysqli_fetch_assoc($result))
	                   {
		                 $p[0]=$row ["q1"];   		
		                 $p[1]=$row ["q2"];     		
		                 $p[2]=$row ["q3"];      		
		                 $p[3]=$row ["q4"];  
		                 $p[4]=$row ["q5"];    
          		
		   
	                    }
					 
					
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'pandav');
$result1=mysqli_query($con,"select ename,duration from exam where eid='$exam_id'");
while($row=mysqli_fetch_assoc($result1))
	                   {
		                 $duration=$row ["duration"];   		
		                 $ename=$row ["ename"];   		
		                
          		
		   
	                    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="exam.css">
  <link rel="stylesheet" href="compiler.css">
  <link rel="stylesheet" href="popup.css">
  <script src="compiler4.js"></script>
    <script src="compiler5.js"></script>
  <script src="compiler6.js"></script>
   <script type="text/javascript" src="compiler.js"></script><!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css" />
-->



<script>

sessionStorage.removeItem('color');
//sessionStorage.setItem('color','white');
sessionStorage.removeItem('size');

function tempFunc(question){
	  runcode(question);
	 setTimeout(infinite, 1000)
	 
	
 }
 
  function tempFunc1(){
	  compilecode();
	 setTimeout(infinite, 1000)
	 
	
 }
 var number=0;
   function infinite(){
	
//var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("post","kill.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send();

number++;
}

 window.onload=function(){


    var req=new XMLHttpRequest();
    req.open("post","compiler.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("question=<?PHP ECHO $p[0]; ?>");
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	//document.write(req.responseText);
    //compiler();
     
  document.getElementById("main").innerHTML=req.responseText;
  compiler();
   CreateTimer("timer","<?php echo $duration;?>");
 // document.write(req.responseText);
	
	
	 }
		
		
	  	 
	 
	}
	

 
}



function exam_timer(timer){

//var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("post","update_timer.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("timer="+timer);
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){

	
	 }
		
		
	  	 
	 
	}
	

 
}























function compiler(){
document.getElementById("output").style="display:none";
document.getElementById("compiletest").style="display:none";
 document.getElementById("spinner").style="display:none";
  document.getElementById("error").style="display:none";
 
}

function page(question){
	
//document.getElementById(question).style="background-color:black";
    var req=new XMLHttpRequest();
    req.open("post","compiler.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("question="+question);
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	//document.write(req.responseText);
    //compiler();
     
  document.getElementById("main").innerHTML=req.responseText;
  compiler();
function show(){  
        var color=sessionStorage.getItem('color');
        var size=sessionStorage.getItem('size');
		

		 	if(color=="black"){
		document.getElementById("txtboxid").style="color:pink;font-size:"+size+"px;background-color:" +color;
	
		
	}
	else if(color=="#878f99"){
		document.getElementById("txtboxid").style="color:white;font-size:"+size+"px;background-color:" +color;
	
	}
	else if(color=="#b2ad7f"){
		document.getElementById("txtboxid").style="color:yellow;font-size:"+size+"px;background-color:" +color;
	
	}
	else if(color=="grey"){
		document.getElementById("txtboxid").style="color:yellow;font-size:"+size+"px;background-color:" +color;

	}
	else{
		document.getElementById("txtboxid").style="color:black;font-size:"+size+"px;background-color:" +color;
		
	}
 // document.write(req.responseText);
	
	
	 }
	 show();
	}
}

}
function closepopup(){

	document.getElementById('myModal').style.display = "none";
	document.getElementById("disabled").disabled = false;
}


 function popup() {
    document.getElementById('myModal').style.display = "block";
    document.getElementById("disabled").disabled = true;
}

</script>
  
  <style>
     #main{

 overflow:auto;
  border:1px solid black;
   
   }
   .pirate{
	   margin-top:0px;
	     position: -webkit-sticky;
  position: sticky;
  top: 0rem;
   }
 
 
 li {
    color:white;
    list-style-type: none;
}
li:before {
    content: '\2022';
    padding-right: 0.8em;
    font-size:50px;
    list-style-type:square;
}
li:nth-child(1){
	color:green;
}
li:nth-child(2){
	color:red;
}
li:nth-child(3){
	color:#b300b3;
}
li:nth-child(4){
	color:darkblue;
}
li span{
color:white;}
  </style>
  
</head>
<body>

<FIELDSET ID="disabled">
<div style="position:sticky;background-color:red;z-index:5;height:50px;" class="pirate"><h2 style="color:white;"><?php echo $ename; ?><!--<span id="blink" style="font-size:25px;position:fixed;left:1200px;color:white;">--><span style="font-size:22px;position:fixed;left:1100px;top:5px;color:white;text-align:center;margin-top:5px;">
	Abhishek Kumar</span><span  id="blink" style="font-size:22px;position:fixed;left:1300px;top:10px;color:white;">Time Left: <span id="timer"></span></span></h2>
	

</div>
	<div class="container-fluid" id="mainpage" style="background-color:#293d3d;border:none;">
	
		<div class="row">
			<div class="col-sm-10 leftbox" id="main" style="border:none;">
				
			</div>
			<div class="col-sm-2 rightbox" style="position:fixed;right:10px;z-index:5;">
				<br>
				<div class="row-sm-4 question right" style="padding-left: 20px;">
                     <br>
					<button onclick="page('<?php  echo "$p[0]";  ?>')"  class="btn2" id="<?php  echo "$p[0]";  ?>">Q1</button>
					<button onclick="page('<?php  echo "$p[1]"  ?>')"  class="btn2" id="<?php  echo "$p[1]";  ?>">Q2</button>
					<button onclick="page('<?php  echo "$p[2]";  ?>')"  class="btn2" id="<?php  echo "$p[2]";  ?>">Q3</button>
					<br>
					<br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button onclick="page('<?php  echo "$p[3]";  ?>')" class="btn2" id="<?php  echo "$p[3]";  ?>">Q4</button>
					<button onclick="page('<?php  echo "$p[4]";  ?>')"  class="btn2" id="<?php  echo "$p[4]";  ?>">Q5</button>
					<br>
					<br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button onclick="popup()" class="btn2">End Exam</button>
<br>
					<br>
					
					
				</div>
				<br>
			
<!--					<table>
<tr><td style="font-size:10px;"><div class="qbtn" style="background:#449d44;">&nbsp;</div> Answered  </td></tr>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#c9302c;">&nbsp;</div> UnAnswered  </td></tr>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#ec971f;">&nbsp;</div> Review-Later (RL)  </td></tr>
<tr><td style="font-size:12px;"><div class="qbtn" style="background:#212121;">&nbsp;</div> Not-visited  </td></tr>
</table>-->
				<div style="background-color:#1e2f2f;">	
             <ul>
			    <li> <span>Corret Answer</span></li>
				 <li><span>Wrong Answer</span></li >
				 <li><span>Compilation Error</span></li>
				  <li><span>UnAnswered</span></li>
			 </ul>
		
			</div>
			
		</div>
	</div>
	</fieldset>
	<!-- The Modal -->
					<div id="myModal" class="modal" >

  <!-- Modal content -->
 <button id="close" onclick="closepopup()">&#10060 </button>
 <br>
 <br>
 <h3 style="color:white;font-family: Times New Roman;">&nbsp&nbsp&nbsp&nbsp Are you sure want to submit?</h3>
<form action="preresult.php" method="post">
<input type="hidden" value="<?php echo $token; ?>" name="mediater">
<input id="yesbtn" class="btn2" type="submit" value="Yes">&nbsp&nbsp&nbsp&nbsp
<input class="btn2" type="button" onclick="closepopup()" value="No">
</form>



</div>
	
</body>




<script>
var Timer;
var counter;
var TotalSeconds;
function CreateTimer(TimerID, Time) {
Timer = document.getElementById(TimerID);
TotalSeconds = Time;

UpdateTimer()
window.setTimeout("Tick()", 1000);
}

function Tick() {
if (TotalSeconds <= 0) {
	
	
	
	/* $.ajax({
            url: "insertexamstatus.php",
            method: "POST",
            data: {
              resp: 1
            }


          });
		  
		   $.ajax({
            url: "destroyexam.php"

          });
	
	*/
	
	
//alert("Time's up!")
//window.location.href="preresult.php";
return;
}
/////////////////////////popup
 //window.onblur = function() {
   //     window.blurred = true;
		 //    win= window.open("tt.php","MyWindow","config='toolbar=no, menubar=no,scrollbars=no,resizable=no,location=no,directories=no,atus=no,width=300px,height=250px'");


////////////////////////
TotalSeconds -= 1;

window.setInterval("exam_timer(TotalSeconds)", 20000);


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

/*var eid="<?php echo $eid; ?>";
			$.ajax({  
                url:"time.php",  
                method:"POST",  
                data:{time:TimeStr,eid:eid}
                
                  
           }); 
		   */
		   
		     /*  if (TimeStr == "00:01:00") {
          document.getElementById("save_answer_signal1").style.backgroundColor = "red";

        }
        if (TimeStr == "00:00:30") {
          document.getElementById("save_answer_signal2").style.backgroundColor = "red";

        }*/
		
		
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
    var x=document.getElementById("blink").style.color = curColor === "red" ? "white" : "red";

}

		
		/////////////////////////////////////////////////////////
		
		

		   
		   
}
function LeadingZero(Time) {

return (Time < 10) ? "0" + Time : + Time;
}




</script>	





	<script type="text/javascript">//window.onload = CreateTimer("timer","<?php echo 15; ?>");</script>




</html>