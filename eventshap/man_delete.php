<?php
if($_GET['event_id'])
{
    $con = mysqli_connect('localhost','root','','eventshap');
    $query = "DELETE FROM `event_master` WHERE event_id= " . $_GET['event_id'];
    $result = mysqli_query($con,$query);
    if($result === TRUE)
    {
        header("location:delete.php");
    }
    else
    {
        header("location:exit.php");
    }
}
else
{
    header("location:exit.php");
}
?>