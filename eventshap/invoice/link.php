<?php 
require('connection.php');
$pd=new Model();
$data = $pd->fetch_products();
session_start();

if(!isset($_SESSION['event'])){
    $_SESSION['event']=[];
}
$result =mysqli_query($con,$query2);
$query3="SELECT * FROM event_booking WHERE book_id='$bid'";
$result1=mysqli_query($con,$query3);
$row2=mysqli_fetch_array($result1);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $b_name=$row2['book_ename'];
	$b_date=$row2['book_edate'];
	$b_time=$row2['book_etime'];
	$b_venue=$row2['book_evenue'];
	$b_uname=$row2['book_uname'];
	$b_unum=$row2['book_unum'];
	$b_uemail=$row2['book_uemail'];
	$b_price=$row2['book_efee'];
	$b_nop=$row2['book_nop'];
	$b_total=$row2['book_total'];
	$b_cate=$row2['book_ecate'];

$name = $row2[''];
$company=$_POST['pcompany'];
$quantity = $_POST["quantity"];
$price=$_POST['pprice'];
$booked = array("ename"=>$b_name,"edate"=>$b_date,"etime"=>$b_time,"evenue"=>$b_venue,
                "uname"=>$b_uname,"unum"=>$b_unum,"uemail"=>$b_price,
                "price"=>$b_price,"nop"=>$b_nop,"total"=>$b_total);
$single_cart = array("name"=>$name,"company"=>$company,"quantity"=>$quantity,"price"=>$price);
array_push($_SESSION['event'],$booked);
}
?>