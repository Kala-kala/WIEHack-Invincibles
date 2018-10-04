

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	#session_start();
	// variable declaration
	$aadhar_id = "";
	$user_password = "";
	$user_name   = "";
	
	
	
	
#for connection
$con = mysqli_connect("localhost","unnati","password123","ejanta");
#register

if(isset($_POST['reg_user']))
{
	


	#echo ($_POST['reg_user']);
if(isset($_POST['aadhar_id']))
{	
 $aadhar_id = $_POST['aadhar_id'];}
 if(isset($_POST['user_name']))
{
 $user_name = $_POST['user_name'];}
 if(isset($_POST['user_password']))
{
$user_password = $_POST['user_password'];}

			echo($user_password);

			#echo($e_mail);saving in the database
			#echo($user_password);

			#echo($e_mail);se
			#echo($user_password);

			#echo($e_mail);

		
			$user_password = md5($user_password);//encrypt the password before saving in the database
			#echo($user_password);

			#echo($e_mail);
$i=0;
$flag=0;

$fetching="SELECT * FROM register WHERE aadhar_id='$aadhar_id'";
$fet=mysqli_query($con,$fetching);
while($row=mysqli_fetch_assoc($fet))
{
extract($row);
if($aadhar_id==$row['aadhar_id'])
$flag=1;
}
if($flag==1)
	{
		echo "<script>alert('Record Inserted')</script>";
	}
else{
echo $query="INSERT INTO register (aadhar_id,user_name,user_password) 
					  VALUES($aadhar_id, $user_name,$user_password)";
		var_dump($query);
					  #die();
			$results=mysqli_query($con, $query);
			header('location: page-login-admin.php');

}

			
	}
#for login

	if (isset($_POST['login_user'])) {

		$aadhar_id=  $_POST['aadhar_id'];
		$user_password = $_POST['user_password'];

		if (empty($aadhar_id)) {
			echo "<script>alert('Enter your Aadhar Id')</script>";
		}
		

			$user_password = md5($user_password);
			$query = "SELECT * FROM register WHERE aadhar_id='$aadhar_id' AND user_password='$user_password'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
		#		$_SESSION['aadhar_id'] = $aadhar_id;
		#		$_SESSION['success'] = "You are now logged in";
				header('location: dashb.php');
			}else {

				echo "<script>alert('Wrong Credentials')</script>";

			}
		}
	#job alert

?>
