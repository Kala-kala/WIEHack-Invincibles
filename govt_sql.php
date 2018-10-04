
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

	if (isset($_POST['govt_login'])) {

		$id=  $_POST['id'];
		$password = $_POST['password'];

		if (empty($id)) {
			echo "<script>alert('Enter your Unique Id')</script>";
		}
		if (empty($password)) {
			echo "<script>alert('Enter your Password')</script>";
		}

			$password = md5($password);
			$query = "SELECT * FROM govt_emp WHERE id='$id' AND password='$password'";
			echo $query;
			#die();
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				#$_SESSION['aadhar_id'] = $aadhar_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: govt-dashb.php');
			}else {

				#echo '<script>swal("Good Job!","Policy Successfully Added","success")</script>';
				#echo "<script>alert('Wrong Credentials')</script>";
				header('location: govt-dashb.php');

			}
		}
	#job alert

?>
