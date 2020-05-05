<?php
 //error_reporting(0);
session_start();
/*
if(!((isset($_POST['startexam'])|| $_SESSION['startexam1']) && isset($_SESSION['startexam']))){

	
	header('location:/ProgramTap/index.php');
	die();
}*/

$user_id=$_SESSION['uid'];
$concept=$_GET['concept'];
$_SESSION['concept']=$concept;
$uiid=$_SESSION['uid'];
$token=rand(1000,99999);
$_SESSION['examtoken']=$token;

//$_SESSION['userid']="abhi123456";
$course_id="c";


//$question_id=$_POST['d'];
$_SESSION['file']='practical'.'/'.$course_id.'/mock/'.'questions'.'/'.$concept.'/';
$_SESSION['submissions']='practical'.'/'.$course_id.'/mock/'.'submissions'.'/'.$concept.'/'.$user_id;

$difficulty_level=$_GET['difficulty'];


	$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');
$result=mysqli_query($con,"select count(*) as no from practical_question where question_id like 'mp$concept%' and difficulty_level='$difficulty_level'");
while($row=mysqli_fetch_assoc($result))
	{
	$noof=$row ["no"];   

	

		    
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
   <script type="text/javascript" src="mockcompiler.js"></script><!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css" />
-->

<script>
var Timer;
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
	
	
alert("Time's up!")
//window.location.href="home.php";
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
var y=<?php echo $noof; ?>;
 window.onload=function(){
	
//var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("get","compiler4.php?val=0&difficulty=<?php echo $difficulty_level; ?>",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send();
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	//document.write(req.responseText);
    //compiler();
    
  document.getElementById("main").innerHTML=req.responseText;
   
  compiler();
 // document.write(req.responseText);
	
	
	 }
		
		
	  	 
	 
	}
	

 
}



function compiler(){
document.getElementById("output").style="display:none";
document.getElementById("compiletest").style="display:none";
 document.getElementById("spinner").style="display:none";
  document.getElementById("error").style="display:none";
 
}



var z=1;

function page(){



if(z>=y){
	<?php unset($_SESSION['qno']);  
	 unset($_SESSION['cques']); 
	 ?> 
	window.location.replace('/ProgramTap/CANDIDATE/Practical.php');
	
}
else{
z++;

//var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("get","compiler4.php?val=1",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send();
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
<body >

<FIELDSET ID="disabled">
<div style="position:sticky;background-color:red;z-index:5;height:50px;" class="pirate"><!--<span id="blink" style="font-size:25px;position:fixed;left:1200px;color:white;">--><span style="font-size:22px;position:fixed;left:1100px;top:5px;color:white;text-align:center;margin-top:5px;">
	Abhishek Kumar</span>
	
	<!--<span  id="blink" style="font-size:22px;position:fixed;left:1300px;top:10px;color:white;">Time Left: <span id="timer"></span></span></h2>-->
	

</div>
	<div class="container-fluid" id="mainpage" style="background-color:#293d3d;border:none;">
	
		<div class="row">
		
		
			<div class="col-sm-10 leftbox"  id="main" style="border:none;">
				
			</div>
			<div class="col-sm-2 rightbox" style="position:fixed;right:10px;z-index:5;">
				<br>
				<div class="row-sm-4 question" style="padding-left: 20px;">
                     <br>
					
					 
					<button onclick="page()"  class="btn2" id="">Next</button>
					

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button onclick="popup()" class="btn2">End Test</button>
<br>
					<br>
					
					
				</div>
				<br>
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
</html>