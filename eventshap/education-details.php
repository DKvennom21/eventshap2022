<!------------
  CONNECTION
------------->
<?php
session_start();
if((!isset($_SESSION['log_user']) || $_SESSION['log_user'])&&(!isset($_SESSION['log_manager']) || $_SESSION['log_manager']) != true){
  header("location:login_user.php");
  exit;
  }
$a = $_GET['id'];
include('connect.php');
?>

<?php
    $con = mysqli_connect('localhost','root','','eventshap');
    $query = "SELECT * FROM `event_master` WHERE event_category='Educational'"; 
    $result = mysqli_query($con,$query);
    if(!$con)
    {
        header("location:exit.php");
    }  
?>
<!-----
  HTML
------->
<?php
  include('event_html.php');
?>
  <h2>Educational</h2>
<?php
  include('event_html_b.php');
?>