<?php
session_start();
$course_id="c";
$exam_id=$_GET['eid'];
$_SESSION['val']=$exam_id;
//$_SESSION['examid1']=$exam_id
$_SESSION['file']='practical'.'/'.$course_id.'/exam/'.$exam_id.'/questions/';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Practical Exam</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="exam.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<form action="practical_exam_file.php" method="post">
<div class="container-fluid"> 
	<br>
 <div class="row">
    <div class="col-sm-12" style="background:linear-gradient(to bottom,#663300 0%, #999999 100%);color:white;font-weight:bold;height:250px;">
 <center><h3>Question</h3></center>
    <div class="form-group">
       <div class="col-sm-2" style="padding-bottom:15px;">
        
		<select style="color:black;" name="concept" class="form-control">
	<option value="cb">C Basic</option>
	<option value="dm">Decesion Making</option>
	<option value="lo">Loops</option>
	<option value="rc">Recursion</option>
	<option value="fs">Function & scope</option>
	<option value="rc">Arrays</option>
	<option value="po">Pointer</option>
	<option value="st">Strings</option>
	
	
	</select>
	</div>
        <textarea spellcheck="false" class="form-control" id="exampleFormControlTextarea1" rows="8" name="question" ></textarea>
        <input type="hidden" value="q4" name="qid" >
	</div>
      
    </div>
 </div>

  <div class="row">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #999999 100%);color:white;font-weight:bold;">
     <div class="form-group">
    <label for="exampleFormControlTextarea1"><h4>Input Format</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6" name="samplein1"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom, #663300 0%, #999999 100%);color:white;font-weight:bold;">  
      <div class="form-group">
    <label for="exampleFormControlTextarea1"><h4>Output Format</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="6"name="sampleout1"></textarea>
  </div>    
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;">
	  
     <div class="form-group" >
<label for="exampleFormControlTextarea1" ><h4>Sample Input 1</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein1"></textarea>
  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1" ><h4>Sample Input 2</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3" name="samplein1"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;">  
      <div class="form-group">
    <label for="exampleFormControlTextarea1" ><h4>Sample Output 1</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3"name="sampleout1"></textarea>
  </div>  
      <div class="form-group">
    <label for="exampleFormControlTextarea1" ><h4>Sample Output 2</h4></label>
    <textarea class="form-control" spellcheck="false" id="exampleFormControlTextarea1" rows="3"name="sampleout1"></textarea>
  </div>  
  
    </div>
	
  </div>


 <div class="row"  style="background:linear-gradient(to right,#663300 0%, #ff99cc 100%);">
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;">
     <br><center><h4>Testcase</h4></center>
    <div class="form-group"><b>1</b>
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input1" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">2
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input2" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">3
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput"  name="input3" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">4
    
    <textarea class="form-control"  spellcheck="false" id="formGroupExampleInput2" name="input4" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">5
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input5" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">6
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input6" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">7
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input7" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">8
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input8" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">9
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="input9" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">10
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="input10" placeholder="Another input"></textarea>
  </div>
    </div>
    
    <div class="col-sm-6" style="background:linear-gradient(to bottom,#663300 0%, #ff99cc 100%);color:white;font-weight:bold;"> 
      <br><center><h4>Answer</h4></center>
      <div class="form-group">1
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output1" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">2
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output2" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">3
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output3" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">4
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output4" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">5
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output5" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">6
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output6" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">7
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output7" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">8
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output8" placeholder="Another input"></textarea>
  </div>
  <div class="form-group">9
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput" name="output9" placeholder="Example input"></textarea>
    </div>

  <div class="form-group">10
    
    <textarea class="form-control" spellcheck="false" id="formGroupExampleInput2" name="output10" placeholder="Another input"></textarea>
  </div>

    </div>
	<center><input type="submit" class="btn2" id="next" value="Next"></center>
	<center><input type="submit" class="btn2" id="submit"></center>
  </div>
  
   
</div>

</form>
</body>
</html>