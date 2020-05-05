
 
 function change(){
	 
	var color= document.getElementById("selectcolor").value;
	sessionStorage.setItem('color', color);
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
	 
 }
 
  function changesize(){
	 
	var size= document.getElementById("selectfont").value;
      sessionStorage.setItem('size', size);
      var color=sessionStorage.getItem('color');
		document.getElementById("txtboxid").style="font-size:"+size+"px";

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
		
	 
 }
 

 
 
function runcode(question){

document.getElementById("spinner").style="display:block";
document.getElementById("compiletest").style="display:none";
document.getElementById("output").style="display:none";
document.getElementById("error").style="display:none";



var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("post","runmock.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("code="+encodeURIComponent(x));
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	 if(isNaN(req.responseText)){
	 	   // document.getElementById('outputboxid').style="color:red";
	  

		
	     document.getElementById('outputboxid').innerHTML=req.responseText;
		 document.getElementById("output").style="display:block;"
		 document.getElementById("outputboxid").style="color:white;background:#b300b3 ";
	
		 document.getElementById("spinner").style="display:none";
	      }
		  else{
		  if(req.responseText==1)
		  {
		   
		     //document.getElementById('outputboxid').style="color:black";
		     document.getElementById('outputboxid').innerHTML="Code submited successfully"; 
			 document.getElementById("output").style="display:block;"
			 document.getElementById("outputboxid").style="color:white;background:#29a329";
			 
			
			   document.getElementById("spinner").style="display:none";
			  // document.getElementById("outputboxid").show();
		  }
		  else{
		   
		  document.getElementById('outputboxid').style="color:black";
		     document.getElementById('outputboxid').innerHTML="Wrong Answer"; 
			 document.getElementById("output").style="display:block;"
			 document.getElementById("outputboxid").style="color:white;background:red";

			document.getElementById("spinner").style="display:none";
		  }
		  }
	 }
	
	
	}
}


function compilecode(){
	document.getElementById("spinner").style="display:block";
	document.getElementById("compiletest").style="display:none";
	document.getElementById("output").style="display:none";
	document.getElementById("error").style="display:none";
var x=document.getElementById("txtboxid").value;
    var req=new XMLHttpRequest();
    req.open("post","compileTest.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	req.send("code="+encodeURIComponent(x));
	req.onreadystatechange=function(){
	 if(req.readyState==4 && req.status==200){
	  document.getElementById("spinner").style="display:none";
	  
     var receive=JSON.parse(req.responseText);
	 if(receive[2]==2){
		document.getElementById("compiletest").style="display:block;background:white";
	  document.getElementById('result').innerHTML=receive[0];
	 document.getElementById('time').innerHTML=receive[1];
	 
	    }
		else{
			document.getElementById("error").style="display:block;background:#FF3933;color:white;margin-top:40px;";
		
			 document.getElementById('error').innerHTML=receive[0];
		}
	 }
		
	  	 
	 
	}
}

