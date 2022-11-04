<?php
include('connect.php');
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$feed=$_POST['message'];

$query="INSERT INTO `feedback`(`feedback_id`, `feedback_name`, `feedback_email`, `feedback`) 
VALUES ('','$name','$email','$feed')";
$result=mysqli_query($con,$query);
if($result)
{
    header("location:index_user.php?id=$id");
}
else
{
    header("location:exit.php");
}
?>