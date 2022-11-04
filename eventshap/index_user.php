<?php
session_start();
if(!isset($_SESSION['log_user']) || $_SESSION['log_user'] != true)
{
  header("location:login_user.php");
  exit;
}
$a = $_GET['id'];
include('connect.php');
global $date;
$date = date('20y-m-d');
$date1 = date('20y-m-d', strtotime("+1 day"));
if(isset($_POST['submit'])){
  $search=$_POST['search'];
  header("location:");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>EventsHap - Uncovering Events Around You</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
    Navigation Bar
  ============================-->
  <?php
            $query="SELECT * FROM user WHERE user_id='$a'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
          ?>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--LOGO-->
        <a href="#intro" class="scrollto"><img src="img/logo3.png" alt="" title=""></a>
        </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#categories">Categories</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="">Welcome! <?php echo $row['user_name'];?></a></li>
          <li class="buy-tickets"><a href="logout.php">Log Out</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">UNCOVERING THE<br><span>EVENTS</span> AROUND YOU</h1>
      <p class="mb-4 pb-0">EVENTSHAP</p>
      <a href="https://youtu.be/cdbb5nLaLRw" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About EVENTSHAP</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The EventsHap</h2>
            <p>Eventshap is a new way to find any nearby events that happening in your locality. Its an easy and modern way to find rather than tradition way to ask.  </p>
          </div>
          <div class="col-lg-3">
            <h3>location</h3>
            <p>Ahmedabad, india</p>
          </div>
        </div>
      </div>
    </section>
<!--==========================
      slider Section
    ============================-->
      <?php
        include('slider.php');
      ?>
      <!--==========================
      categories Section
    ============================-->
    <section id="categories" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Categories</h2>
          <p>Pick and enjoy</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="category">
              <img src="img/categories/sports01.jpg" alt="Category 1" class="img-fluid">
              <div class="details">
                <h3><a href="sports-details.php?id=<?php echo $a ?>">Sports</a></h3>
                <p>Sports is a greatest physical poetry.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="category">
              <img src="img/categories/live02.jpg" alt="Category 2" class="img-fluid">
              <div class="details">
                <h3><a href="live-details.php?id=<?php echo $a ?>">Live Events</a></h3>
                <p>Feel alive and enjoy the moment.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="category">
              <img src="img/categories/food03.jpg" alt="Category 3" class="img-fluid">
              <div class="details">
                <h3><a href="food-details.php?id=<?php echo $a ?>">Food Fest</a></h3>
                <p>A belly always rules the mind.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="category">
              <img src="img/categories/education04.jpg" alt="Category 4" class="img-fluid">
              <div class="details">
                <h3><a href="education-details.php?id=<?php echo $a ?>">Educational</a></h3>
                <p>Foundation for better future.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="category">
              <img src="img/categories/exhibition05.jpg" alt="Category 5" class="img-fluid">
              <div class="details">
                <h3><a href="exhibition-details.php?id=<?php echo $a ?>">Exhibition</a></h3>
                <p>Masterpiece are not made in one day.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="category">
              <img src="img/categories/other06.jpg" alt="Category 6" class="img-fluid">
              <div class="details">
                <h3><a href="category-details.php?id=<?php echo $a ?>">Other</a></h3>
                <p>wait till we add new...</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Upcoming Events</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Today</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Tomorrow</a>
          </li>
        </ul>

        <h3 class="sub-heading">Daily event updates</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
          <?php 
            $query="SELECT * FROM `event_master` WHERE event_date='$date' ";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {
          ?>
            <div class="row schedule-item">
            <div class="col-md-2"><time><?php echo $row['event_time']; ?></time></div>
              <div class="col-md-10">
              <div class="category">
                  <img src="<?php echo $row['event_path'] ?>" alt="Brenden Legros">
                </div>
                <h4><?php echo $row['event_name']; ?></h4>
                <p><?php echo $row['event_descrip']; ?></p>
              </div>
            </div>
          <?php 
            }
          ?>
          </div>
          
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

          <?php 
            $query="SELECT * FROM `event_master` WHERE event_date='$date1' ";
            $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {
          ?>
            <div class="row schedule-item">
            <div class="col-md-2"><time><?php echo $row['event_time']; ?></time></div>
              <div class="col-md-10">
              <div class="category">
                  <img src="<?php echo $row['event_path'] ?>" alt="Brenden Legros">
                </div>
                <h4><?php echo $row['event_name']; ?></h4>
                <p><?php echo $row['event_descrip']; ?></p>
              </div>
            </div>
          <?php 
            }
          ?>

            
          <!-- End Schdule Day 2 -->
           </div>

      </div>

    </section>

    
    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>

    </section>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Ahmedabad, Gujarat</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 8160244245">8780471553</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:EventsHap2021@gmail.com">ukothari918@rku.ac.in</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <?php
            $query="SELECT * FROM user WHERE user_id='$a'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
          ?>
          <form action="feedback_val.php?id=<?php echo $a ?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['user_name'];?>" readonly/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['user_email']; ?>" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo3.png" alt="EventsHap">
            <p>
              Uncovering Event Around You.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
            <p>
              Ahmedabad, india <br>
              <strong>Phone:</strong> +91 8780471553<br>
              <strong>Email:</strong> ukothari918@rku.ac.in<br>
              <strong>developers:</strong> darshit and dhruv<br>
            </p>


            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>EventsHap</strong>. All Rights Reserved
      </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

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

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
     
</body>

</html>
