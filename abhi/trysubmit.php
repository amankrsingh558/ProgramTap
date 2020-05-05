<DOCTYPE html>

<html>

<script>
function submit(){
var x=document.getElementById("one").value;
    var req=new XMLHttpRequest();
    req.open("post","accessfile.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send();
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	 
	     document.getElementById('finaloutput').innerHTML=req.responseText;
	 
	 }
	
	
	}
}

</script>
<body>

<textarea name="ans" id="one">
</textarea>
<textarea id="finaloutput">
</textarea>
<input type="button" onclick="submit()" value="submit">

</body>

</html>
