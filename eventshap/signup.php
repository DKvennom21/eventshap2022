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
    echo "password do not match";
  }
  else{
  $insert="INSERT INTO `user`(`user_id`, `user_name`, `user_email`, `user_contact`, `user_password`, `user_cpassword`, `user_address`, `user_pincode`, `user_birthdate`, `user_gender`) 
  VALUES ('','$user_name','$user_email','$user_contact','$user_password','$user_cpassword','$user_address','$user_pincode','$user_birthdate','$user_gender')";
  $query=mysqli_query($con,$insert);
  if($query){
    echo "inserted";
  }
  else{
    echo "not inserted";
  }
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/log.css">
    <link rel="stylesheet" href="css/log2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">User Registration</div>
    <div class="content">
      <form  method="post" onsubmit="return validation()" name="login">
      <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="user_name" required>
          </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your Email" name="user_email" required>
          </div>

          <div class="input-box">
            <span class="details">Contact</span>
            <input type="text" placeholder="Enter your Contact" name="user_contact" pattern="\d*" maxlength="10" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="user_password" required >
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="user_cpassword" required>
          </div>

          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Flat/Bunglow No."name="user_address" required>
          </div>

          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" placeholder="Enter your Pincode" name="user_pincode" pattern="\d*" maxlength="6" required>
          </div>

          <div class="input-box">
            <span class="details">D.O.B</span>
            <input type="Date" placeholder="Enter your BirthDay" name="user_birthdate" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="user_gender" id="dot-1" value="male">
          <input type="radio" name="user_gender" id="dot-2" value="female">
          <input type="radio" name="user_gender" id="dot-3" value="other"̥>
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button" align="center">
            <input type="submit" name="submit" value="Register" onclick="return validation();">
        
            <a href="home.html">
            <input type="button" value="Cancel"></a>



            
        </div>
      </form>
    </div>
  </div>
  <script>
  function validation(){
    var email=document.forms["login"]["user_email"];
    var password=document.forms["login"]["user_password"];
    if(password.value.length<8){
      window.alert("password must be atleast 8 characters long");
                  password.focus();
                  return false;
    }
  }
</script>
</body>
</html>