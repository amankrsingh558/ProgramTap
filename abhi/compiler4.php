<?php
  //error_reporting(0);
session_start();

$fil=$_SESSION['file'];
$question_id="";
$concept=$_SESSION['concept'];

$noof=0;
$q=0;
$val=$_GET['val'];
if($val==1){
	//unset($_SESSION['question']);
	$x=$_SESSION['cques'];
		$x++;
		$limit=$_SESSION['qno'];

		$_SESSION['cques']=$x;
		function count_digit($number) {
       return strlen($number);
             }

          
           $number_of_digits = count_digit($x); 
		   if($number_of_digits==1){
           $q="000".$x;	
		   }	
        elseif($number_of_digits==2){
           $q="00".$x;	
		   }		
         elseif($number_of_digits==3){
           $q="0".$x;	
		   }
           else{
           $q=$x;	
		   }
	$question_id="mp$concept$q";
	$_SESSION['ques']=$question_id;
}

else{
	$difficulty_level=$_GET['difficulty'];
	$_SESSION['cques']=1;
	$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'compiler');
$result=mysqli_query($con,"select count(*) as no from practical_question where question_id like 'mp$concept%' and difficulty_level='$difficulty_level'");
while($row=mysqli_fetch_assoc($result))
	{
	$noof=$row ["no"];   
	$_SESSION['qno']=$noof;
	//$_SESSION['cques']=1;

		    
	}
	$question_id="mp$concept"."0001";
	$_SESSION['ques']=$question_id;
}





 





	
	 

$question=file_get_contents($fil.$question_id.'/question.txt');
$samplein1=file_get_contents($fil.$question_id.'/samplein1.txt');
$samplein2=file_get_contents($fil.$question_id.'/samplein2.txt');
$sampleout1=file_get_contents($fil.$question_id.'/sampleout1.txt');
$sampleout2=file_get_contents($fil.$question_id.'/sampleout2.txt');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Bootstrap -->

  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="compiler.css" >
  <link rel="stylesheet" href="spinner4.css">

  <script src="compiler4.js"></script>
  <script src="mockcompiler.js"></script><!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css" />

-->
<script>



window.onload=function(){
document.getElementById("output").style="display:none";
document.getElementById("compiletest").style="display:none";
 document.getElementById("spinner").style="display:none";
 document.getElementById("error").style="display:none";
CodeMirror.fromTextArea(document.getElementById("txtboxid"), {
lineNumbers: true});
 
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
</script>


<style>


    #txtboxid {
      overflow-y: auto;
	  overflow-x:auto;
      height: 600px;
      width: 100%;
      resize: none;
	  font-size:18px;
 font-family: Times New Roman;
      font-weight: bold;
    }

    #outputboxid {
    
      height: 60px;
      width: 1100px;
      resize: none;
      border: 1px solid black;
      margin-bottom:20px;
      font-weight: bold;
	  border-radius:10px;
	  text-align:center;
	  
	  overflow-y:hidden;
    }
	
	#compiletest {
      overflow: auto;
     display:none;
      width: 100%;
      resize: none;
      border: 1px solid black;
      margin-bottom:20px;
      font-weight: bold;
	  border-radius:10px;
	  text-align:center;
	  
	  
    }
	#error{
		
		 border: 1px solid black;
		 margin-bottom:20px;
		  text-align:center;
		   border-radius:10px;
		   border-radius:10px;
		   background:red;
		   color:black;
		 
	}
	#table{
		height:10%;
		font-weight:normal;	
	}
	#table1{	
		font-weight:normal;	
	}
    #selectlanguage{
margin-left:500px;
    }

	#samplein{
		font-weight: normal;
	}
	#sampleout{
		font-weight: normal;
	}
	body{
		background-color:#293d3d;
	}
  </style>
</head>

<body>
  <script src="compiler5.js"></script>
  <script src="compiler6.js"></script>
  <div class="container">
    <div class="card">
      <div class="card-header">
           <H2>Palindromic String</H2>
      </div>
      <div class="card-body" id="font-size:80px;">
        <h5 class="card-title">

         <!-- You have been given a String S. You need to find and print whether this string is a palindrome or not. If yes, print "YES" (without quotes), else print "NO" (without quotes).
  -->
<?php echo $question; ?>
  <br /><br />
      Input Format:<br />
     The first and only line of input contains the String S. The String shall consist of lowercase English alphabets only.
	 
<br /><br />
      Output Format:<br />
      Print the required answer on a single line.

<br /><br />


      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sample Input:</h5>
              <p class="card-text" id="samplein"> &#8226 <?php echo $samplein1; ?><br> &#8226 <?php echo $samplein2; ?></p>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sample Output:</h5>
              <p class="card-text" id="sampleout"> &#8226 <?php echo $sampleout1; ?><br> &#8226 <?php echo $sampleout2; ?></p>

            </div>
          </div>
        </div>
      </div>
        </h5>
        <p class="card-text"></p>
      </div>
    </div>
    <form id="hiii">
      <br />

        <label for="Code Editor"><h2 style="color:white;">Code Editor </h2></label>
  <select id="selectlanguage" value="language" name="language">
        <option>
          C
        </option>

        <option>
          JAVA
        </option>

        <option>
          C++
        </option>

        <option>
          PYTHON
        </option>
  </select>




<label style="color:white;">font Size :</label><select id="selectfont" onchange="changesize()" >
<option value="10">
10px
</option>

<option value="12">
12px
</option>

<option value="16">
16px
</option>

<option value="20">
20px
</option>

<option value="24">
24px
</option>
<option value="30">
30px
</option>
<option value="34">
34px
</option>
<option value="36">
36px
</option>
<option value="40">
40px
</option>
</select>


<label style="color:white;">Theme :</label><select id="selectcolor" onchange="change()">

  <option value="white">
    White
  </option>
<option value="black">
  Black
</option>

<option value="#878f99">
Brown
</option>
<option value="#b2ad7f">
  Light Blue
</option>
<option value="grey">
 Grey
</option>
</select>
      <textarea spellcheck="false" class="form-control" class="changeme" id="txtboxid"  style="border:solid 1px black;">
// Warning: Printing unwanted or ill-formatted data to output will cause the test cases to fail

#include<stdio.h>
int main(){
// Write your code here	
	
	
	
return 0;	
}


</textarea>
     
      <BR />
     <a href="#output" ><button type="button" onclick="tempFunc('<?php echo $question_id; ?>')" class="btn btn-success btn-lg btn2" id="sbm1" >SUBMIT</button></a>
      <button type="button"  onclick="compilecode()" class="btn btn-primary btn-lg btn2">Compile & Test</button>

	  <div class="lds-spinner" id="spinner" style="background-color:white;"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	  
    </form>

    
    <br />
    <div id="output">
      <center>
        <H3 style="color:white;">Status</H3>
      </center>
   
      <div   id="outputboxid"> </div>
	</div>
<div id ="compiletest">
   <table id="table"  cellpadding="20" style="margin-left:10px;"><tr><th>Status  :</th><td>Successfully Executed</td>
   <td><table cellpadding="5"><tr><th>Time  :</th><td><div id="time"> </div><td>sec</td></tr></table></td>
      
   </tr></table> 
   <hr style="border:dotted 1px;"/>
   <div   id="result"></div>    
</div>

<div id="error"></div>
</body>
</html>




