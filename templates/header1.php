<?php 


ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title></title>
   <!-- <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">-->

   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
   <!-- <link href="css/main.css" rel="stylesheet">-->
    
    <script src="js/jquery.min.js"></script>
  <!--  <script src="js/bootstrap.min.js"></script>
   <!-- <script src="js/jquery.validate.min.js"></script>->
    
 </head>
 <body>

   
	<!--<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>-->
			<?php 
			$arr = explode("/",$_SERVER['REQUEST_URI']);
			$uri = end( $arr ); 
			?>
			<!--<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == 'home') echo "class='active'"; ?>><a href="home">Home</a></li>
					<li <?php if($uri == 'quiz-results') echo "class='active'"; ?>><a href="quiz-results">EXAM Results</a></li>
					
					
					
					
					<--- <?php //if($uri == 'start-quiz') echo "class='active'"; ?>><a href="start-quiz">Start New Quiz</a></li>
				  original
				
				
				<li <?php if($uri == 'start-quiz') echo "class='active'"; ?>><a href="start-quiz.php">Start EXAM</a></li>
				
				
				-->
				
				
						<?php //if($_SESSION['logged_in']) { ?>
							<?php //echo $_SESSION['uname']; ?>
						
						<?php// }?>
	