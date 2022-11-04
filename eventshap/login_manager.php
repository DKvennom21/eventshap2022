<?php
include('connect.php');
$login=false;
if(isset($_POST['submit'])){
  $manager_email = $_POST['manager_email'];
  $manager_password = $_POST['manager_password'];

  if($sql = "SELECT * FROM manager WHERE manager_email = '$manager_email' AND manager_password = '$manager_password'"){
    $result = mysqli_query($con,$sql);
    $no_of_rec = mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){
      $a=$row['manager_id'];
    }
  if($no_of_rec == 1)
  {
  	mysqli_close($con);
	  session_start();
	  $_SESSION['log_manager'] = TRUE;
	  $_SESSION['manager_id'] = $manager_id;
	  header("location:managerlog.php?id=$a");
  }
  else{
	  echo '<div class="alert alert-danger" role="alert">
	  Invalid credentials!!
    </div>';
  }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login_manager/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/login_manager/bootstrap.min.css">
  <link rel="stylesheet" href="css/login_manager/login.css">

  
</head>
<body class="d-flex flex-column">
  <main class="m-auto">
    <div class="container-fluid">
      <div class="card login-card">
        <div class="card-body">
          <h2 class="login-card-title">Sign In As Manager</h2>
          <form name="login_manager" method="post" onsubmit="return validation()">
            <div class="form-group">
              <label for="manager_email" class="sr-only">Email</label>
              <input type="text" name="manager_email" id="manager_email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="manager_password" class="sr-only">Password</label>
              <input type="password" name="manager_password" id="manager_password" class="form-control" placeholder="Password">
            </div>
            <input name="submit" id="submit" class="btn login-btn" type="submit" value="Login">
            <div class="form-group">
              <label for="login_admin"><a href="admin/admin_log.php">Login As Admin</a></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script src="js/login_manager/jquery-3.4.1.min.js"></script>
  <script src="js/login_manager/popper.min.js"></script>
  <script src="js/login_manager/bootstrap.min.js"></script>
</body>
</html>
