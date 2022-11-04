<?php
    //<---------INITIALIZATION--------->
    $feedback_name = $_POST['name'];
    $feedback_email = $_POST['email'];
    $feedback = $_POST['feed'];
    //<---------CONNECT--------->
    $con = mysqli_connect('localhost','root','','eventshap');
    //<---------QUERY--------->
    $query = "SELECT * FROM user WHERE user_email= '".$feedback_email."'";
    $result = mysqli_query($con,$query);
    $no_of_rec = mysqli_num_rows($result);
    //<---------INSERT CONDITION--------->
    if($no_of_rec == 1)
    {
        $insert = "INSERT INTO `feedback`(`feedback_id`, `feedback_name`, `feedback_email`, `feedback`) 
        VALUES ('','$feedback_name','$feedback_email','$feedback')";

        $check = mysqli_query($con,$insert);
        if($con)
        {
            header("location:entry.php");
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