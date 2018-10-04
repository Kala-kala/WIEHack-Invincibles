
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	session_start();
	// variable declaration
	
	$pass = "";
	$mentor_id    = "";
	
	
	
#for connection
$con = mysqli_connect("localhost","unnati","password123","ejanta");
#register


#for login

	if (isset($_POST['self-defense_login'])) {

		$mentor_id=  $_POST['mentor_id'];
		$pass = $_POST['pass'];

		if (empty($mentor_id)) {
			echo "<script>alert('Enter your Id')</script>";
		}
		if (empty($pass)) {
			echo "<script>alert('Enter your Password')</script>";
		}

			$admin_password = md5($admin_password);
			$query = "SELECT * FROM mentor_login WHERE mentor_id='$mentor_id' AND pass='$pass'";
			echo $query;
			#die();
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				#$_SESSION['aadhar_id'] = $aadhar_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: mentor_dashboard.php');
			}else {

				#echo '<script>swal("Good Job!","Policy Successfully Added","success")</script>';
				#echo "<script>alert('Wrong Credentials')</script>";
				header('location: admindashboard.php');

			}
		}
	#job alert

?>
