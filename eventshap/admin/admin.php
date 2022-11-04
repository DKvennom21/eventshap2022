<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
include('includes/General.php');
$object= new General();
?>

        

       
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Stats</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                Total Number Of Users</div>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from user");                                
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'. $restcount .'</div>';
                                                ?>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300   "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                Male User</div>
                                                <?php
                                                    $restcount=$object->getRowCount("select user_gender from user where user_gender='male'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $restcount .'</div>';
                                                ?>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                Female User</div>
                                                  <?php
                                                 $restcount = $object->getRowCount("select user_gender from user where user_gender='female'");
                                           echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $restcount .'</div>';
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                            Booked Events By Male & Female</div>
                                            <?php
                                                $restcount=$object->getRowCount("select * from event_booking");
                                                echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Male- ' . $restcount .'</div>';
                                           ?>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                </div>
                                                  <?php
                                                 $restcount=$object->getRowCount("select * from event_booking");

                                           echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $restcount .'</div>';
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------
                            MANAGER
                    ----------------------->
                    <h1 class="h3 mb-0 text-gray-800">Manager Stats</h1>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                Events Added By Category</div>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_master where event_category='Sports'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Sports - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_master where event_category='Live Events'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Live Events - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_master where event_category='Food Fest'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Food Fest - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_master where event_category='Educational'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Educational - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_master where event_category='Exhibition'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Exhibition - ' . $restcount .'</div>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                            Booked Events By Category</div>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_booking where book_ecate='Sports'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Sports - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_booking where book_ecate='Live Events'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Live Events - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_booking where book_ecate='Food Fest'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Food Fest - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_booking where book_ecate='Educational'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Educational - ' . $restcount .'</div>';
                                                ?>
                                                <?php
                                                    $restcount=$object->getRowCount("select * from event_booking where book_ecate='Exhibition'");
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">Exhibition - ' . $restcount .'</div>';
                                                ?>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                On Going Events</div>
                                                  <?php
                                                 $restcount=$object->getRowCount("select * from event_master");

                                           echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $restcount .'</div>';
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                Total Users</div>
                                                <?php
                                                $restcount=$object->getRowCount("select * from user");                                
                                                echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'. $restcount .'</div>';
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hotel fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                On Going Events</div>
                                                  <?php
                                                 $restcount=$object->getRowCount("select * from event_master");

                                           echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $restcount .'</div>';
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                                Events</div>
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <?php
                                                 $connection = new mysqli("localhost","root","","eventshap");
                                                 $query="select mm. event_id,
                                                                      event_name as 'Event Name' ,
                                                                      event_category as 'Event Category',
                                                                      event_date as 'Event Date',
                                                                      event_added as 'Event Added By Manager',
                                                                      event_venue as 'Event Venue' 
                                                                      from event_master mm order by event_id";
      
                                                  $result= $connection->query($query);
                                                  $rowcount=mysqli_num_rows($result);
                                                  $fieldinfo = $result -> fetch_fields();
      
                                                 if ($rowcount>0)
                                                  {
                                                      echo '<tr>';
                                                      $i=1;
                                                      foreach ($fieldinfo as $val) 
                                                      {
                                                          if($i==1)
                                                          {
                                                            echo '<td style="display:none;">' . $val->name . '</td>';
                                                          }
                                                         else
                                                         {
                                                         echo '<td>' . $val->name . '</td>'; 
                                                         }
                                                           $i=$i+1;
                                                      }
                                                    while ($row = $result ->fetch_assoc()) 
                                                    {
                                                      echo '<tr>';
                                                      $i=1;
                                                      foreach ($fieldinfo as $val) 
                                                      {
                                                          if($i==1)
                                                          {
                                                                echo '<td style="display:none;">' . $row[$val->name] . '</td>';
                                                          }
                                                      else
                                                      {
                                                        echo '<td>' . $row[$val->name] . '</td>';
                                                      } 
                                                      $i=$i+1;
                                                       
                                                      }
                                                    }
                                                  }
                                           ?>
                                           </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

  <?php
include('includes/footer.php');
include('includes/scripts.php');
?>