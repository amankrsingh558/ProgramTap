<?php

if(!isset($_POST['question'])){
	$ques="q1";
}
else{
$ques=$_POST['question'];
session_start();
}
$_SESSION['question']=$ques;
$fil=$_SESSION['file'];
$question=file_get_contents($fil.'/questions/'.$ques.'/q.txt');
$samplein=file_get_contents($fil.'/questions/'.$ques.'/sample.txt');
$sampleout=file_get_contents($fil.'/questions/'.$ques.'/sampleout.txt');

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
  <script src="compiler.js"></script>

<script>
window.onload=function(){
document.getElementById("output").style="display:none";
document.getElementById("compiletest").style="display:none";
 document.getElementById("spinner").style="display:none";
 document.getElementById("error").style="display:none";
 
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
 font-family: Times New Roman;
      font-weight: 500;
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
		height:50px;
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
      <div class="card-body">
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
              <p class="card-text"> <?php echo $samplein; ?></p>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sample Output:</h5>
              <p class="card-text"> <?php echo $sampleout; ?></p>

            </div>
          </div>
        </div>
      </div>
        </h5>
        <p class="card-text"></p>
      </div>
    </div>
    <form>
      <br />

        <label for="Code Editor"><h2>Code Editor </h2></label>
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




<label>font Size:</label><select id="selectfont" >
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


<label>Theme</label><select id="selectcolor" onchange="change()">

  <option value="white">
    White
  </option>
<option value="black">
  Black
</option>

<option value="yellow">
  Yellow
</option>
</select>
      <textarea class="form-control" class="changeme" id="txtboxid"  style="border:solid 1px black;">
// Warning: Printing unwanted or ill-formatted data to output will cause the test cases to fail


int main(){
//write your command here
	
	
	
}
</textarea>
     
      <BR />
     <a href="#output" ><button type="button" onclick="runcode('<?php echo $ques;?>')" class="btn btn-success btn-lg" id="sbm1" >SUBMIT</button></a>
      <button type="button"  onclick="compilecode()" class="btn btn-primary btn-lg">Compile & Test</button>

	  <div class="lds-spinner" id="spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	  
    </form>

    
    <br />
    <div id="output">
      <center>
        <H3>Status</H3>
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
