
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	session_start();
	// variable declaration
	
	$admin_password = "";
	$admin_id    = "";
	$e_mail    = "";
	
	
	
#for connection
$con = mysqli_connect("localhost","unnati","password123","ejanta");
#register


#for login

	if (isset($_POST['login_user1'])) {

		$admin_id=  $_POST['admin_id'];
		$admin_password = $_POST['admin_password'];

		if (empty($admin_id)) {
			echo "<script>alert('Enter your Admin Id')</script>";
		}
		if (empty($admin_password)) {
			echo "<script>alert('Enter your Admin Password')</script>";
		}

			$admin_password = md5($admin_password);
			$query = "SELECT * FROM admin_reg WHERE admin_id='$admin_id' AND admin_password='$admin_password'";
			echo $query;
			#die();
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				#$_SESSION['aadhar_id'] = $aadhar_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: admindashboard.php');
			}else {

				#echo '<script>swal("Good Job!","Policy Successfully Added","success")</script>';
				#echo "<script>alert('Wrong Credentials')</script>";
				header('location: admindashboard.php');

			}
		}
	#job alert

?>
