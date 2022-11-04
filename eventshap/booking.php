<?php
session_start();
if(!isset($_SESSION['log_user']) || $_SESSION['log_user'] != true)
{
  header("location:login_user.php");
  exit;
}
global $a;
$a = $_GET['id'];
$eid = $_GET['eid'];
include('connect.php');
?>
<?php
include('connect.php');
if($_POST)
{
	$b_name=$_POST['b_name'];
	$b_date=$_POST['b_date'];
	$b_time=$_POST['b_time'];
	$b_venue=$_POST['b_venue'];
	$b_uname=$_POST['b_uname'];
	$b_unum=$_POST['b_unum'];
	$b_uemail=$_POST['b_uemail'];
	$b_price=$_POST['b_price'];
	$b_nop=$_POST['b_nop'];
	$b_total=$_POST['b_total'];
	$b_cate=$_POST['b_cate'];

	$query2="INSERT INTO `event_booking`(`book_id`, `book_ename`, `book_edate`, `book_etime`, `book_evenue`, `book_uname`, 
	`book_unum`, `book_uemail`, `book_efee`, `book_nop`, `book_total`, `book_ecate`) 
	VALUES ('','$b_name','$b_date','$b_time','$b_venue','$b_uname','$b_unum','$b_uemail','$b_price',
	'$b_nop','$b_total','$b_cate')";
	
	$result = mysqli_query($con,$query2);
	if($result === true)
	{
		header("location:snippet_book.php?id=$a&&bid='".book_id."'");
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>EventsHap-Uncovering Events Around You</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/book_style.css" />

</head>

<body>
	<?php
        $select="SELECT * FROM `user` WHERE `user_id` = '$a'";
        $query=mysqli_query($con,$select);
        $num=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);

        $select1="SELECT * FROM `event_master` WHERE `event_id` = '$eid'";
        $query1=mysqli_query($con,$select1);
        $num1= mysqli_num_rows($query1);
        $row1 = mysqli_fetch_array($query1);
    ?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book Your Event</h1>
						</div>
						<form method="post" id="book" onsubmit="return validation()">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Event Name</span>
										<input class="form-control" type="text" name="b_name" 
											value="<?php echo $row1['event_name']; ?>" readonly>
											<input type="hidden" name="b_cate" value="<?php echo $row1['event_category']; ?>">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<span class="form-label">Event Date</span>
										<input class="form-control" type="text" name="b_date" 
											value="<?php echo $row1['event_date']; ?>" readonly >
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<span class="form-label">Event Time</span>
										<input class="form-control" type="time" name="b_time" 
											value="<?php echo $row1['event_time']; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Event Venue</span>
								<input class="form-control" type="text" name="b_venue" value="<?php 
									echo $row1['event_venue'].",";
									echo $row1['event_area'].",";
									echo $row1['event_pin']; ?>" readonly>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">User Name</span>
										<input class="form-control" type="text" name="b_uname" 
											value="<?php echo $row['user_name'];?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">User Number</span>
										<input class="form-control" type="text" pattern="[0-9]+" 
											maxlength="10" minlength="10" name="b_unum" 
											value="<?php echo $row['user_contact']; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">User Email</span>
								<input class="form-control" type="email" name="b_uemail" 
									value="<?php echo $row['user_email']; ?>" readonly>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">Event Price Per Head</span>
										<input class="form-control" type="text" id="price" name="b_price"
											onchange="CalculateTotal()" value="<?php echo $row1['event_fee'] ?>" readonly>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">No. of Person</span>
										<input class="form-control" type="number" name="b_nop" id="num" 
											onchange="CalculateTotal()" min="1" max="15" required>
										
									</div>		
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">Total Amount To be Paid</span>
										<input class="form-control" type="text" id="totala" name="b_total" required readonly>
									</div>
								</div>
							</div>
							<div class="form-btn">
							<button class="submit-btn">Book Now</button>
							</div>
						</form>

						<script type="text/javascript"> 
							function CalculateTotal() {
							   var num = document.getElementById('num').value;
							   var price = document.getElementById('price').value;
							   var total = num * price;                       
							   document.getElementById('totala').value = total;
							}
						 </script>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>