<!DOCTYPE html>
<html>
<head>
<hr>
  <title>User login</title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/log2.css">
</head>
<body>
  <div class="container">
    <div class="title">User Login</div>
    <div class="content">
      <form method="post" action="log_val.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your Email" name="user_email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your Password" name="user_password" required>
          </div>
        </div>
        <div class="button" align="center">
          <a href="index_user.php">
          <input type="submit" value="Login" name="submit" id="submit"></a>
      
          <a href="index.php">
          <input type="button" value="Cancel"></a>
      </div>
       <div>
      
        <p><a href="log_man.php">Manager Login</a></p>
</body>
</html>