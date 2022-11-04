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
?>
<?php
include("connect.php");
$date=date_create();
$y="20".date('y');
$m=date('m');
$mind=date('d')+1;
date_date_set($date,$y,$m,$mind+60);
$maxm=date_format($date,"m");
$maxd=date_format($date,"d");
?>

<?php
    if($_POST)
    {
        $event_category = $_POST['Category'];
        $event_name = $_POST['ename'];
        $event_date = $_POST['edate'];
        $event_time = $_POST['etime'];
        $event_agegrp = $_POST['age'];
        $event_fee = $_POST['fee'];
        $event_venue = $_POST['venue'];
        $event_descrip = $_POST['description'];
        $event_area = $_POST['area'];
        $event_map= $_POST['map'];

        $q = "SELECT * FROM `area` WHERE `area_name` = '".$event_area."' ";
        $result2 = mysqli_query($con,$q);
        $row2 = mysqli_fetch_array($result2);
        $pin=$row2['area_pincode'];

        $target_path = "uploads/";
        $target_path = $target_path.basename( $_FILES['img']['name']);

        var_dump($_FILES);
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path))
        {
            $con = mysqli_connect('localhost','root','','eventshap');
            $query = "INSERT INTO `event_master`(`event_id`, `event_category`, `event_name`, `event_date`, `event_time`, `event_agegrp`, `event_fee`, `event_venue`, `event_area`, `event_pin`, `event_path`, `event_descrip`, `event_map`) 
            VALUES ('','$event_category','$event_name','$event_date','$event_time','$event_agegrp','$event_fee','$event_venue','$event_area','$pin','$target_path','$event_descrip','$event_map')";
            $result = mysqli_query($con,$query);
            if($result === true)
            {
                $check = ($event_category == 'Sports') ? header("location:sports-details.php") : 
                        (($event_category == 'Educational') ? header("location:education-details.php ") : 
                        (($event_category == 'Live Events') ? header("location:live-details.php") : 
                        (($event_category == 'Exhibition') ? header("location:exhibition-details.php") : 
                        (($event_category == 'Food Fest' ? header("location:food-details.php") : 
                        header("location:exit.php"))))));
            }
            else
            {
                header("location:exit.php");
            }
        }
        else
        {
            echo "sorry";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel="Stylesheet"
    href="css/signup.css" type="text/css">
</head>
<body>
    <div class="main">
        <div class="ADD" align="center">
            <h2>ADD</h2>
            <form id="ADD" method="post" action="man_add.php" enctype="multipart/form-data">
                <!--CATEGORY-->
                <label>Event Category : </label>
                <br>
                &nbsp;&nbsp;&nbsp;
                <!--RADIO BUTTON-->
                <input type="radio" name="Category" id="Sports" value="Sports">
                &nbsp;
                <span id="Sports">Sports</span>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="radio" name="Category" id="Live Events" value="Live Events">
                &nbsp;
                <span id="Live Events">Live Events</span>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="radio" name="Category" id="Food Fest" value="Food Fest">
                &nbsp;
                <span id="Food Fest">Food Fest</span>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="radio" name="Category" id="Educational" value="Educational">
                &nbsp;
                <span id="Educational">Educational</span>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="radio" name="Category" id="Exhibition" value="Exhibition">
                &nbsp;
                <span id="exhibition">Exhibition</span>
                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="radio" name="Category" id="Others" Value="Other">
                &nbsp;
                <span id="Others">Others</span>

                <br><br>
                
                <!--MAIN-->
                
                <label>Event's Name : </label>
                <br>
                <input type="text" name="ename" id="name" placeholder="Add Event Name" required>
                <br><br>
                
                
                <label>Event's Date : </label>
                <br>
                <input type="date" min="<?php echo $y;?>-<?php echo $m;?>-<?php echo $mind;?>" max="<?php echo $y;?>-<?php echo $maxm;?>-<?php echo $maxd;?>" name="edate" required>
                <br><br>

                <label>Event's Time  :</label>
                <br>
                <input type="time" name="etime" min="06:00" max="22:00" step="600"  required>
                <br><br>

                <label>Age Group : </label>
                <br>
                <input type="number" name="age" min="5" max="70" id="name" placeholder="Add The Age Limit" required >
                <br><br>

                <label>Event's Registration Fee : </label>
                <br>
                <input type="number" name="fee" id="name" placeholder="Add The Event Fee" min="200" max="1000" required >
                <br><br>
                
                <label>Event's Venue : </label>
                <br>
                <input type="text" name="venue" id="name" placeholder="Add The Event Venue" required >              
                <br><br>
                
                <label>Event's Area : </label>
                <br>
                <select class="form-select" aria-label="Default select example" name="area" style="text-align:center;" id="area" required> 
                
                <?php
                        $query1 = "SELECT * FROM area";
                        $result1 = mysqli_query($con,$query1);
                        
                    while($row1= mysqli_fetch_array ($result1))
                    {
                        $area=$row1['area_name'];
                        
                ?>
        
                <option value="<?php echo $area;?>"><?php echo $area;?></option>
       
                <?php
                    }
                    
                ?>
                
                </select>
                
                <br><br> 
                <label>Event's Image :</label>
                <br>
                <input type="file" name="img"  placeholder="Add The Image" required>
                <br><br>
                
                <label>Event's Description : </label>
                <br>
                <input type="text" name="description" id="name" placeholder="Add Event Description" required>
                <br><br>

                <label>Event's Map : </label>
                <br>
                <input type="text" name="map" id="name" placeholder="Add Event Map" required>
                <br><br>
                <input type="submit" name="button"
                id="button">

            </div>
            </div>
            </form>
    
</body>
</html>