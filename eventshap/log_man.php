<!DOCTYPE html>
<html>
<head>

<hr>
  <title>user login</title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/log2.css">
</head>
<body>
    <div class="container">
        <div class="title">Manager Login</div>
        <div class="content">
            <form action="log_val_man.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your Email" name="manager_email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" name="manager_password" required>
                    </div>
                </div>
                <div class="button" align="center">
                    <a href="managerlog.php">
                    <input type="submit" value="Login"></a>
      
                    <a href="log_man.php">
                    <input type="button" value="Cancel"></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>