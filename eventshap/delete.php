<!------------
  CONNECTION
------------->
<?php
  $con = mysqli_connect('localhost','root','','eventshap');
  $query = "SELECT * FROM `event_master`";
  if(!$con)
  {
    header("location:exit.php");
  }
  $result = mysqli_query($con,$query);
?>
<!-----
  HTML
------>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
<!-----
  CSS
------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/update.css">
  </head>
  <body>
    <!----------------
      NAVIGATION BAR
    ----------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">EventsHap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-----------
      MAIN BODY
    ------------>
    <h1> Delete Event</h1>
    <table align="center">
      <tr>
        <th>Event Name</th>
        <th>Category</th>
        <th>Update</th>
      </tr>
      <?php
        while($row = mysqli_fetch_array($result))
        {
      ?>
      <tr>
        <td><?php echo $row['event_name']; ?></td>
        <td><?php echo $row['event_category'];?></td>
        <td><a href="man_delete.php?event_id=<?php echo $row['event_id'];?>"><button>Delete</button><a></td>
      </tr>
      <?php
        }
      ?>
    <!-----------
      BODY ENDS
    ------------>
  </body>
</html>