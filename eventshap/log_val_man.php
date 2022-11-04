<?php
$manager_email = $_POST['manager_email'];
$manager_password = $_POST['manager_password'];

$con = mysqli_connect('localhost','root','','eventshap');
$query = "SELECT * FROM manager WHERE manager_email = '".$manager_email."' AND manager_password = '".$manager_password."'";
//echo $query;
$result = mysqli_query($con,$query);
$no_of_rec = mysqli_num_rows($result);
if($no_of_rec == 1)
{
	mysqli_close($con);
	session_start();
	$_SESSION['logged_in'] = TRUE;
	header("location:managerlog.php");
}
else
{
	mysqli_close($con);
	header("location:log_man.php");	
}
?>