<!DOCTYPE html>
<html>
<script>
function runcode(){

//var x=document.getElementById("txtboxid").value;
var x="abhishek";
	var y="kumari";
    var req=new XMLHttpRequest();
    //req.open("post","receivedata.php",true);
	
	req.open("post","receivedata.php",true)
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
req.send("fname=" + x  + "&lname="+y);
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	document.getElementById("try").innerHTML=req.responseText;
	
	 }
	
	
	}
}
</script>
<body>
<input type="button" value="click" onclick="runcode()">
<div id="try" ></div>
</body>
</html>