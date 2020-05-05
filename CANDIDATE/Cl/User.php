<?php

class Cl_User
{
	
	protected $_con;
	
	
	public function __construct()
	{
		$db = new Cl_DBclass();
		$this->_con = $db->con;
	}
	
	
	public function getConnection()
	{
		return $this->_con;
	}
	
	public function registration( array $data )
	{
		if( !empty( $data ) ){
			
			
			$trimmed_data = array_map('trim', $data);
			
			
			
		$uid = mysqli_real_escape_string( $this->_con, $trimmed_data['uid'] );
			$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name'] );
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			$cpassword = mysqli_real_escape_string( $this->_con, $trimmed_data['confirm_password'] );
				$year = mysqli_real_escape_string( $this->_con, $trimmed_data['year'] );
					$branch = mysqli_real_escape_string( $this->_con, $trimmed_data['branch'] );
			
			
			if (filter_var( $trimmed_data['email'], FILTER_VALIDATE_EMAIL)) {
				$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email']);
			} else {
				throw new Exception( "Please enter a valid email address!" );
			}
			
			
			if( (!$uid) || (!$name) || (!$email) || (!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
			if ($password !== $cpassword) {
				throw new Exception( PASSWORD_NOT_MATCH );
			}
			
			
			//$password = md5( $password );
			$query = "INSERT INTO user (uid, uname, email, passwd,year,branch) VALUES ('$uid','$name', '$email', '$password','$year','$branch')";
			
			$query1 = "INSERT INTO mock(uid) VALUES ('$uid')";
			
			
			if(mysqli_query($this->_con, $query)  && mysqli_query($this->_con,$query1)){
				mysqli_close($this->_con);
				return true;
			};
		} else{
			throw new Exception( USER_REGISTRATION_FAIL );
		}
	}
	
	public function login( array $data )
	{
		$_SESSION['logged_in'] = false;
		
		
		if( !empty( $data ) ){
			
		
			$trimmed_data = array_map('trim', $data);
			
			
			$uroll = strtoupper(mysqli_real_escape_string( $this->_con,  $trimmed_data['uroll'] ));
			$password = mysqli_real_escape_string( $this->_con,  $trimmed_data['upass'] );
				
			if((!$uroll) || (!$password) ) {
				throw new Exception( LOGIN_FIELDS_MISSING );
			}
			//$password = md5( $password );
			$query = "SELECT uid,uname,email  FROM user where uid= '$uroll' and passwd ='$password' ";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			mysqli_close($this->_con);
			if( $count == 1){
				
				$_SESSION['user'] = $uroll;
				$_SESSION = $data;
				$_SESSION['logged_in'] =true;
				return true;
			}else{
				throw new Exception( LOGIN_FAIL );
			}
		} else{
			throw new Exception( LOGIN_FIELDS_MISSING );
		}
	}
	
	
	public function account( array $data )
	{
		if( !empty( $data ) ){
			// Trim all the incoming data:
			$trimmed_data = array_map('trim', $data);
			
			// escape variables for security
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password'] );
			$cpassword = $trimmed_data['confirm_password'];
			$user_id = $_SESSION['uid'];
			if((!$password) || (!$cpassword) ) {
				throw new Exception( FIELDS_MISSING );
			}
			if ($password !== $cpassword) {
				throw new Exception( PASSWORD_NOT_MATCH );
			}
			$password = ( $password );
			$query = "UPDATE user SET passwd = '$password' WHERE uid = '$user_id'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	
	
	
	
	
	
	
	
	
	public function logout()
	{
		session_unset();
		session_destroy();
		session_start();
		$_SESSION['success'] = LOGOUT_SUCCESS;
		$query = "UPDATE user SET passwd = '$password' WHERE uid = '$user_id'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			}
		header('Location: index.php');
	}
	
	//////////////////////////////////////////////////////////

	
	/*public function ExamStatus()
	{
	$_SESSION['status']=true;
	
	
	}*/
	
	
		public function forgetPassword( array $data )
	{
		if( !empty( $data ) ){
			
			
			// escape variables for security
			
			$uid = mysqli_real_escape_string( $this->_con, trim( $data['uid'] ) );
			$pass = mysqli_real_escape_string( $this->_con, trim( $data['pass'] ) );
			$pass=hash('sha512',$pass);
			
			if((!$uid && !$pass ) ) {
					// echo "<script>alert('Please Enter password') </script>";
				throw new Exception( FIELDS_MISSING );
			}

			$query = "UPDATE user SET passwd = '$pass' WHERE uid = '$uid'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				
				
				?>
					<script src="/ProgramTap/CANDIDATE/sweetalert.js"></script>;
				 <script>swal("Password Successfully Changed", "", "success");</script>;
				
				
				
				<?php return true;
			}
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	
	
	
	


}