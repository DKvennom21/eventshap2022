<?php
include('connect.php');
$login=false;
if(isset($_POST['submit'])){
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];

  if($sql = "SELECT * FROM user WHERE user_email = '".$user_email."' AND user_password = '".$user_password."'"){
    $result = mysqli_query($con,$sql);
    $no_of_rec = mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){
      $a=$row['user_id'];
    }
  if($no_of_rec == 1)
  {
  	mysqli_close($con);
	  session_start();
	  $_SESSION['log_user'] = TRUE;
	  $_SESSION['user_id'] = $user_id;
	  header("location:index_user.php?id=$a");
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
  <title>EventsHap Login User</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login_user/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/login_user/bootstrap.min.css">
  <link rel="stylesheet" href="css/login_user/login_user.css">
</head>
<body>
  <main class="d-flex min-vh-100 align-items-center p-4 p-md-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6 intro-section">
          <div class="intro-content-wrapper">
            <div class="brand-wrapper">
              <img src="img/logo3.png" alt="logo" class="logo">
            </div>
            <h1 class="intro-title">Welcome to EventsHap !</h1>
            <p class="intro-text">Uncovering Events Around You.</p>
            <a href="sign_up.php" class="btn signup-link-btn">Get an account</a>
          </div>
        </div>
        <div class="col-md-6 form-secion">
          <div class="login-wrapper">
            <h2 class="login-title">Log in</h2>
            <form method="post" name="login_user" onsubmit="return validation()">
                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" name="user_email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="user_password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <input name="submit" id="submit" class="btn login-btn" type="submit" value="Login">
                  <a href="login_manager.php" class="forgot-password-link">Log In As Manager</a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="js/login_user/jquery-3.4.1.min.js"></script>
  <script src="js/login_user/popper.min.js"></script>
  <script src="js/login_user/bootstrap.min.js"></script>
</body>
</html>