<?php
session_start();
if(!isset($_SESSION['log_manager']) || $_SESSION['log_manager'] != true){
  header("location:login_manager.php");
  exit;
  
}
else{
  $_SESSION['log_manager'] = TRUE;
}
$id = $_GET['id'];
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/managerlog.css">
    
    <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <style>body{background-image:url('img/managerbg.png');
            background-size: 100% 120%;
}
.b1-content {
  display: none;

}
.b1 {
    height: 95px;
    padding: 100px ;
    border: none;
    outline: none;
    border-radius: 15px;
    overflow: hidden;
    font-family: "Quicksand", sans-serif;
    font-size: 30px;
    font-weight: 600;
    cursor: pointer;
  }
.b1-content a {
color: rgb(0, 0, 0);
padding: 12px 16px;
text-decoration: none;
display: inline-block;
}

.b1-content a:hover {background-color: rgb(221, 221, 221);}

.b1:hover .b1-content {display: block;}

.b1:hover .button {background-color: #3e8e41;}

  </style>
  
</head>
<body>
    
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--LOGO-->
        <a class="scrollto"><img src="img/logo3.png" alt="" title=""></a>
        </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
          <li class="buy-tickets"><a href="logout_man.php">Log Out</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main id="main">
      <div class="b1" align="center">
        <button type="button" class="button">
          <span class="button__text">Events Management</span>
          <span class="button__icon">
            <ion-icon name="cloud-download-outline"></ion-icon>
          </span>
          <span class="b1-content">
          <a href="man_add.php?id=<?php echo $id ?>">ADD</a>
          <a href="update.php?id=<?php echo $id ?>">UPDATE</a>
          <a href="delete.php?id=<?php echo $id ?>">DELETE</a>
          </span>
        </button>
      </div>
        <div class="b" align="center"><a href="pdf.php">
            <button type="button" class="button">
              <span class="button__text">Events History</span>
              <span class="button__icon">
                <ion-icon name="cloud-download-outline"></ion-icon>
                <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
              </span>
            </button></a>
        </div>
</main>
           
<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>   
</body>
</html>