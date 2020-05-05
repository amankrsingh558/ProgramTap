
<html>
<style>
.demo div { 
    
    height:75px;
    line-height: 60px;
    font-family: "Century Gothic", "Helvetica", sans-serif;
    font-size: 90px;
    font-weight: bold;
    text-align: center;
    margin-left: 60px; 
    margin-right: 60px; 
}
.demo1 { 
    color: #111;
    text-shadow: 0px 3px 1px rgba(255,255,255,.5); 
}
#pcde, .gg{
    font-family: "Century Gothic", "Helvetica", sans-serif;
    font-size: 30px;
    font-weight: bold;
    text-align: center; 
	color:green;
	border:0px;
	background-color:#e3ebe0;
}
.vw{
    font-family: "Century Gothic", "Helvetica", sans-serif;
    font-size: 20px;
    font-weight: bold;
    text-align: center; 
	color:black;
	border:0px;
	background-color:#e3ebe0;
}
	 #mainwrapper{
width:480px;
height:380px;
margin: 0 auto;
background:white;
padding: 5px;
border-radius:10px;
border: 2px solid blue;
background-color:#ebebe0;
}
.button, .span{
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.span{
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
::placeholder { 
    color: blue;
    opacity: 0.3; 
	font-size:25px;
}
.v{
	width:50px;
}
#one{
	font-size:40px;
}
</style>

<script>
function style1(x){
	if(x==1){
		document.getElementById("one").style="font-size:40px;background-color:blue";
		document.getElementById("two").style="font-size:24px;background-color:#993366";
		document.getElementById("fm").style="display:block";
		document.getElementById("bumb").style="display:none";
	}
	else if(x==2){
		document.getElementById("one").style="font-size:24px;background-color:blue";
		document.getElementById("two").style="font-size:40px;background-color:#993366";
		document.getElementById("fm").style="display:none";
		document.getElementById("bumb").style="display:block";
		
	}
}

</script>
<body style="background-color:#ffebcc">
<div class="demo">
    <div class="demo1">
  Hello Admin
  </div>
</div><br><br><br>
<center>

 <div  align="center" id="mainwrapper"><br><br>
 <span id="one" onclick="style1(1)" style="background-color:blue" class="span"> Exam  </span>  <span onclick="style1(2)" id="two" style="background-color:#993366" class="span"> Mock </span>
<br><br>
<form id="fm" action="insertExam.php" method="post" >
   <input placeholder="Enter Exam Name" onkeyup="callget(this)" class="gg" id="pcde" name="ename">
   <input placeholder="Number of Questions" onkeyup="callget(this)" class="gg" type="number" name="noq" >
   <br><br><span name="Pcode" class="vw"> DIFFICULTY LEVEL MARKS : <br>Easy <input name="easy" id="pcde" value="1" class="v" type="text">Medium <input name="medium" id="pcde" value="2" class="v" type="text">Hard <input name="hard" id="pcde" value="3"  class="v" type="text">
   </span>
   <br><sup style="color:red;margin-left:220;" id="msg"></sup> <br><br><br>
   <input class="button" type="submit" id="bbb" value="Add Questions" >
</form>
<form action="mockSet.php">
<br><br><br><input class="button" style="display:none" type="submit" id="bumb" value="Add Questions" >
</form>
</div>
</center>
</html>