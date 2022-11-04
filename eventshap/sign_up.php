<?php
include("connect.php");
if(isset($_POST['submit']))
{
  $user_name=$_POST['user_name'];
  $user_email=$_POST['user_email'];
  $user_contact=$_POST['user_contact'];
  $user_password=$_POST['user_password'];
  $user_cpassword=$_POST['user_cpassword'];
  $user_address=$_POST['user_address'];
  $user_pincode=$_POST['user_pincode'];
  $user_birthdate=$_POST['user_birthdate'];
  $user_gender=$_POST['user_gender'];
  if($user_cpassword!=$user_password){
    echo '<div class="alert alert-danger" role="alert" align="center">
    Password Do Not Match!
  </div>';
  }
  else{
  $insert="INSERT INTO `user`(`user_id`, `user_name`, `user_email`, `user_contact`, `user_password`, `user_cpassword`, `user_address`, `user_pincode`, `user_birthdate`, `user_gender`) 
  VALUES ('','$user_name','$user_email','$user_contact','$user_password','$user_cpassword','$user_address','$user_pincode','$user_birthdate','$user_gender')";
  $query=mysqli_query($con,$insert);
  if($query){
	  header("location:snippet.php");
  }
  else{
    echo '<div class="alert alert-danger" role="alert" align="center">
    User Already Exists!
    </div>';
  }
  }
}
?>
<?php
include("connect.php");
$date=date_create();
$y="20".date('y');
$xy=$y-16;
$m=date('m');
$mind=date('d')+731;
date_date_set($date,$xy,$m,$mind);
$maxm=date_format($date,"m");
$maxd=date_format($date,"d");
?>
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/login_user/bootstrap.min.css">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>User SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" action="sign_up.php" name="login">
                    <table>
					<input class="text" type="text" name="user_name" placeholder="Full Name" required>
					<input class="text email" type="email" name="user_email" placeholder="Email" required>
          <input class="text email" type="text" name="user_contact" placeholder="Contact" pattern="\d*" maxlength="10" minlength="10" required>
					<input class="text" type="password" name="user_password" placeholder="Password" pattern="[A-Za-z0-9]{8}"required>
					<input class="text w3lpass" type="password" name="user_cpassword" placeholder="Confirm Password" maxlength="10" minlength="8" required>
                    <input class="text email" type="text" name="user_address" placeholder="Address" required>
                    <input class="text email" type="text" name="user_pincode" placeholder="Pincode" pattern="\d*" maxlength="6" minlength="6" required>
                    <input class="text email" type="date" name="user_birthdate" placeholder="D.O.B" min="<?php echo $xy;?>-<?php echo $m;?>-<?php echo $mind;?>" max="<?php echo $xy;?>-<?php echo $maxm;?>-<?php echo $maxd;?>" required>
                    <div class="text" required>
                        <p>Gender</p>
                        <p>
                            <input type="radio" name="user_gender" id="dot-1" value="male">Male
                            <input type="radio" name="user_gender" id="dot-2" value="female">Female
                            <input type="radio" name="user_gender" id="dot-3" value="other">Prefer Not to Say
                        </p>
                    </div>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required>
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
          
					<input type="submit"  value="SIGNUP" name="submit">
				</form>
				<p>Already having a Account? <a href="login_user.php"> Login Now!</a></p>
			</div>
		</div>
	</div>
  
</div>
	<!-- //main -->
    <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>