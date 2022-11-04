<?php
$con = mysqli_connect('localhost','root','','eventshap');

if($_POST)
{
    $event_id = $_POST['event_id'];     
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

    if(strlen($_FILES['img']['name']) !=0)
    {
        $target_path = "uploads/";
        $target_path = $target_path.basename( $_FILES['img']['name']);



        if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path))
        {
            $query = "UPDATE `event_master` SET `event_name`='".$event_name."',`event_date`='".$event_date."',
                                                `event_time`='".$event_time."',`event_agegrp`='".$event_agegrp."',
                                                `event_fee`='".$event_fee."',`event_venue`='".$event_venue."',
                                                `event_area`='".$event_area."',`event_pin`='".$pin."',
                                                `event_path`='".$target_path."',`event_descrip`='".$event_descrip."',
                                                `event_map`='".$event_map."'
                                                WHERE event_id = '".$event_pin."'";
            $result = mysqli_query($con,$query);
            if($result === true)
            {
                header("location:update.php");
            }
            else
            {
                header("location:exit.php");
            }
        }
        else
        {
            echo "Sorry";
        }
    }
    else
    {
        $query = "UPDATE `event_master` SET event_name = '".$_POST['ename']."', 
                                            event_date = '".$_POST['edate']."', event_time = '".$_POST['etime']."', 
                                            event_agegrp = '".$_POST['age']."', event_fee = '".$_POST['fee']."',
                                            event_venue = '".$_POST['venue']."', event_pincode = '".$_POST['pincode']."',
                                            event_descrip = '".$_POST['description']."' WHERE event_id = ".$_POST['event_id'];
        $result = mysqli_query($con,$query);
        if($result === true)
        {
            header("location:update.php");
        }
        else
        {
            header("location:exit.php");
        }
    }
}
else
{
    if($_GET['event_id'])
    {
        $query = "SELECT * FROM `event_master` WHERE event_id = ".$_GET['event_id'];
        $result = mysqli_query($con,$query);
        if($result !== FALSE)
        {
            $row = mysqli_fetch_array($result);
            ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Update</title>
                    <link rel="Stylesheet" href="css/ADD.css" type="text/css">
                </head>
                <body>
                    <div class="main">
                        <div class="ADD" align="center">
                            <h2>Update</h2>
                            <form id="ADD" method="post" action="man_edit.php" enctype="multipart/form-data">
                                <input type="hidden" name="event_id" value="<?php echo $_GET['event_id'];?>">
                                
                                <br><br>
                        
                                <!--MAIN-->
                                <label>Event's Name : </label>
                                <br>
                                <input type="text" name="ename" id="name" placeholder="Add Event Name" value="<?php echo $row['event_name'];?>" required>
                                <br><br>
                
                
                                <label>Event's Date : </label>
                                <br>
                                <input type="date" min="<?php echo $y;?>-<?php echo $m;?>-<?php echo $mind;?>" max="<?php echo $y;?>-<?php echo $maxm;?>-<?php echo $maxd;?>" name="edate" required value="<?php echo $row['event_date'];?>">
                                <br><br>

                                <label>Event's Time  :</label>
                                <br>
                                <input type="time" name="etime" min="06:00" max="22:00" step="600" required value="<?php echo $row['event_time'];?>">
                                <br><br>

                                <label>Age Group : </label>
                                <br>
                                <input type="number" name="age" min="5" max="70" id="name" placeholder="Add The Age Limit" required value="<?php echo $row['event_agegrp'];?>">
                                <br><br>

                                <label>Event's Registration Fee : </label>
                                <br>
                                <input type="number" name="fee" id="name" placeholder="Add The Event Fee" min="200" max="1000" required value="<?php echo $row['event_fee'];?>">
                                <br><br>
                
                                <label>Event's Venue : </label>
                                <br>
                                <input type="text" name="venue" id="name" placeholder="Add The Event Venue" required value="<?php echo $row['event_venue'];?>">              
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
                                <input type="text" name="description" id="name" placeholder="Add Event Description" required value="<?php echo $row['event_descrip'];?>">
                                <br><br>

                                <label>Event's Map : </label>
                                <br>
                                <input type="text" name="map" id="name" placeholder="Add Event Map"                >
                                <br><br>
                                <input type="submit" name="button"
                                id="button">
                            </form>
                        </div>
                    </div>
                </body>
            </html>
        <?php
        }
        else
        {
            header('location:exit.php');
        }
    }
    else
    {
        header('location:exit.php');
    }
}
?>