<?php
ob_start();
session_start();
require_once 'config.php'; 
?>

<style>
.response{
    padding: 6px;
    display: none;
}

.not-exists{
    color: red;
}

.exists{
    color: green;
}

</style>



<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data){
				$_SESSION['success'] = USER_REGISTRATION_SUCCESS;
				header('Location: index.php');exit;
			}
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>REGISTRATION PAGE</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

   
    
    
    <script src="js/jquery.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
	
		<div class="login-form">
			
			
			<h1 class="text-center">REGISTRATION PAGE</h1>
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form"  >
				
				<div>
					<input name="uid" id="uid" type="text" class="form-control"   placeholder="College Rollno"  maxlength="8" style="text-transform:uppercase" required > 
					<!--<span class="help-block"></span> -->
					 <span id="uid_response" class="response"></span>
					 <br>
					 <span id="uid_response1" class="response1"></span>
				</div>
				
				
				
				<div>
					<input name="name" id="name" type="text" class="form-control" placeholder="Name"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Email address" > 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="password" id="password" type="password" class="form-control" placeholder="Password"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit"  id="register1" >Sign Up</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Forgot password? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php"> Sign In </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>
<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>  






<script>

$(document).ready(function(){

   $("#uid").keyup(function(){

      var uid = $("#uid").val().trim();

      if(uid != ''){

         $("#uid_response").show();

         $.ajax({
            url: 'uid_check.php',
            type: 'post',
            data: {uid:uid},
            success: function(response){
console.log(response);
                if(response > 0){
					$("#register1").attr("disabled", true);
					//alert("Hello");
                    $("#uid_response").html("<span class='not-exists'>* Roll No Already Exist.</span>");
                }else{
					$('#register1').attr("disabled", false);
                   $("#uid_response").html("<span class='exists'>&nbsp;</span>");
                }

             }
          });
      }else{
         $("#uid_response").hide();
      }

    });

 });
 
 
 
 
 
 
 
 $('#uid').keyup(function() {
	 
    if (this.value.match(/^[A-Z]{2}[1-2][5-9][0]{2}[0-9]{2}/)) {
		
		//$("#register1").attr("disabled",false);
        $('.response1').html('').css("color","green");
	
	
    }else{
		$("#register1").attr("disabled", true);
       $('.response1').html('wrong format').css("color","red");
	 
	  // alert("not valid");
    }
});



 

 
</script>











  