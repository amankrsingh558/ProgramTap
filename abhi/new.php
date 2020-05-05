<html>
<style>
   #hello{
  
  border: 1px solid black;
   
   }

</style>
<script>



function compiler(){
document.getElementById("output").style="display:none";
document.getElementById("compiletest").style="display:none";
 document.getElementById("spinner").style="display:none";
 
}

function page(){
	
//var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("post","tryyyyy.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send();
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
//document.write(req.responseText);
    //compiler();

   document.getElementById("hello1").innerHTML=req.responseText;
	
	
	 }
		
		
	  	 
	 
	}
}
</script>
<body>

<div id="hello1"></div>
<div>Hiiiiiiiiiiiiiiiiiiiiiiiiiii</div>
<input type="button" onclick="page()" value="clickssss">
</body>
</html>