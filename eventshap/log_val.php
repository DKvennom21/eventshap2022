<?php
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$con = mysqli_connect('localhost','root','','eventshap');
$query = "SELECT * FROM user WHERE user_email = '".$user_email."' AND user_password = '".$user_password."'";
//echo $query;
$result = mysqli_query($con,$query);
$no_of_rec = mysqli_num_rows($result);
if($no_of_rec == 1)
{
	mysqli_close($con);
	session_start();
	$_SESSION['logged_in'] = TRUE;
	header("location:index_user.php");
}
else
{
	mysqli_close($con);
	header("location:login_user.php");	
}
?>