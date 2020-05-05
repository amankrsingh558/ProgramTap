<script>
function compilecode(){
	
    var req=new XMLHttpRequest();
    req.open("post","compileTest.php",true);
    req1.open("post","compileTest.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("code="+encodeURIComponent(x));
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	 
	
	 }
		
	  	 
	 
	}
}
</script>