<?php
session_start();
if(isset($_POST['startexam']) && isset($_SESSION['startexam'])){
if(!($_POST['startexam']==$_SESSION['startexam']) && (!isset($_SESSION['exam']))){
	unset($_SESSION['startexam']);
	header('location:home.php');
	die();
}
}
$_SESSION['exam']=0;
//$_SESSION['userid']="abhi123456";
$course_id="c";
$exam_id="e1";
//$question_id=$_POST['d'];
$_SESSION['file']='practical'.'/'.$course_id.'/'.$exam_id.'/';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Bootstrap -->

  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="compiler.css" href="spinner4.css">
  

  <script src="compiler4.js"></script>
   <script type="text/javascript" src="compiler.js"></script>
</head>

<script>
 window.onload=function(){
	
//var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("post","compiler.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("question=Q1");
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


  $(document).ready(function() {
          $("#txtboxid").on("contextmenu",function(){

             return false;
          });
      });

      $(document).ready(function() {
     $('#txtboxid').bind('cut copy paste', function (e) {
      e.preventDefault();
  });
  });


  $(document).ready(function() {
      $("#outputboxid").on("contextmenu",function(){

         return false;
      });
  });

  $(document).ready(function() {
 $('#outputboxid').bind('cut copy paste', function (e) {
  e.preventDefault();
});
});

function compiler(){
document.getElementById("output").style="display:none";
document.getElementById("compiletest").style="display:none";
 document.getElementById("spinner").style="display:none";
  document.getElementById("error").style="display:none";
 
}

function page(question){
	
//var x=document.getElementById("txtboxid").value;
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
 // document.write(req.responseText);
	
	
	 }
		
		
	  	 
	 
	}
}



</script>
<body>
<style>
#table{
	width:100%;
	height:700px;
}
   #main{
	   
  width:1200px;
  height:700px;
 overflow:auto;
  border: 1px solid black;
   
   }
      #question{
	   
  width:20%;
  height:22%;
  overflow:auto;
  border: 1px solid black;
  position:fixed;
  top:5.25%;
  left:79%; 
padding:2%;  
background-color:#99bbff;
   border-radius:5px;
   }
    #instr{
	   
  width:300px;
  height:300px;
 overflow:auto;
  border: 1px solid black;
   
   }
   
   .btn1{
	   border-radius:10px;
	   height:38%;
	   width:20%;
	   background-color:#ffb3ff;
	   font-size:20px;
	   color:blue;
	   cursor:pointer;
	   border:1px solid black;
	   box-shadow: 5px 10px #888888;
	   
   }
   
   .btn1:hover {background-color:#ffb3ff;
   opacity:0.6;
   
   }

.btn1:active {
  background-color:#ffb3ff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
  <script src="compiler5.js"></script>
  <script src="compiler6.js"></script>
  <h3 style="color:blue">PRACITICAL EXAM</h3>

  
<div id="main">

</div>

<div id="question">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="page('<?php  echo 'q1';  ?>')" value="Q1" class="btn1" id="q1"/>
&nbsp
<input type="button" onclick="page('<?php  echo 'q2';  ?>')" value="Q2" class="btn1" id="q2"/>&nbsp&nbsp
<input type="button" onclick="page('<?php  echo 'q3';  ?>')" value="Q3" class="btn1"id="q3"/><br><br>&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="button" onclick="page('<?php  echo 'q3';  ?>')" value="Q4" class="btn1"id="q4"/>&nbsp&nbsp
<input type="button" onclick="page('<?php  echo 'q3';  ?>')" value="Q5" class="btn1"id="q5"/>&nbsp&nbsp
<form action="submission.php">
<input type="submit" class="btn1"id="q5"/>&nbsp&nbsp
</form>
</div>


</body>
</html>