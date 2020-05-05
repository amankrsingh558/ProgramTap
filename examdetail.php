<?php require_once 'templates/header2.php';?>

<?php 
		if($_SESSION['status'])
	{	echo "<script>alert('still alive')</script>";
		$_POST['start']=true;
		header("location:gg.php");
	}
	
?>

<html lang="en">
  <head>
  <title> Attempt \EXAM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
	 
	<!-- bootstrap css -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- custom css -->
	<link href="css1/style.css" rel="stylesheet">
	
	
	<!-- jquery -->
	<script src="js/jquery.js"></script>
	
		<!-- custom javascript -->
	  	<script src="js/basic.js"></script>
		
	<!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- fontawesome css -->
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	
	<!-- chartjs -->
	<script src="js/Chart.bundle.min.js"></script>
	
	<!-- firebase messaging menifest.json -->
	 <link rel="manifest" href="js/manifest.json">
	 

 </head>
  <body>
		   
  <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            			  
<a class="navbar-brand" href="#">EXAM WINDOW</a> 
            


             
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">	
      </nav>

		<center></center>
	
		

	
 <div class="container">

   
 <h3>Attempt EXAM</h3>
   
 

  <div class="row">
     <form method="post" id="quiz_detail" action="gg.php" name="signin">
	
<div class="col-md-12">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
				
<table class="table table-bordered">
<tr><td>EXAM NAME</td><td>CBASIC</td></tr>
<tr><td colspan='2'>Description<br></td></tr>
<tr><td>Start Time</td><td>2018-10-15 13:35:13</td></tr>
<tr><td>End Time</td><td>2019-10-15 13:35:13</td></tr>
<tr><td>Duration </td><td>3 HRS</td></tr>

<tr><td>Minimum Percentage Required to Pass</td><td>50</td></tr>
<tr><td>Correct Score</td><td>Easy=1 MEDIUM=2 HARD=3 </td></tr>
<tr><td>InCorrect Score</td><td>0</td></tr>
<tr><td>Language</td><td>English</td></tr>
</td></tr>
<tr><td colspan='2'><b style="color:red">Caution: If You  will leave the Exam Window or minmize it, then Exam will be submitted Automatically </b><br></td></tr>
</table>
  <button class="btn btn-success" name="start" type="submit">Start Exam</button>
 
 		</div>
</div>
 
 </div>
 </form>
 </div>

 		


<script src="js/start.js"></script>
</body>
</html>
