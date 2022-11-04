
<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>

 <style type="text/css">
      .LockOff
        {
            display: none;
            //visibility: hidden;
        }
        
        
        .LockOn
        {
            display: block;
            //visibility: visible;
            position: absolute;
            z-index: 9999999;
            top: 200px;
            left: 200px;
            width: 50%;
            height: 50%; /*background-color: #ccc;*/
            background-color: white;
            border-width: 2px;
            text-align: center;
            font-size: 15pt;
            //color: red;
            padding-top: 10%;            
            filter: alpha(opacity=75);
            opacity: 0.90;
            text-transform: none;
        }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>                   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Registered Users</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users - EventsHap</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   
                                <?php
                                        $connection = new mysqli("localhost","root","","eventshap");
                                            $query="select mm. user_id,
                                                                    user_name as 'Name',
                                                                    user_email as 'Email',
                                                                    user_contact as 'Contact No.',
                                                                    user_address as 'Address',
                                                                    user_birthdate as 'Birth Date',
                                                                    user_gender as 'Gender' 
                                                                    from user mm ";
                                        


                                            $result= $connection->query($query);
                                            $rowcount=mysqli_num_rows($result);
                                           $fieldinfo = $result -> fetch_fields();

  
                                            if ($rowcount>0)
                                            {
                                                echo '<tr>';
                                                $i=1;
                                                foreach ($fieldinfo as $val) 
                                                {
                                                    if(stripos($val->name,"id")>0 or $i==1)
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
                                                    if(stripos($val->name,"id")>0 or $i==1)
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
            
           
    

    
  <?php
include('includes/scripts.php');
include('includes/footer.php');

?>

   
   