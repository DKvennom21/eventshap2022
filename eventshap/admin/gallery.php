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
            height: 50%; 
            background-color: white;
            font-color:#ccc;
            border-width: 2px;
            text-align: center;
            font-size: 15pt;
            //color: red;
            padding-top: 10%;            
            filter: alpha(opacity=75);
            opacity: 10;
            text-transform: none;
        }
          .divmessage{
            color: white;
          }
        

</style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>

<script type="text/javascript">
function InsertRecord()
{
    $("#divmessage").removeClass("LockOff");
    $("#divmessage").addClass("LockOn");
    $("#butok").hide();
    $("#butInsert").show();
    $("#txtcityname").val("");
    $("#txtcitypincode").val("");
    $("#txtcityname").focus();
    
}
function CancelEdit()
{
    $("#divmessage").removeClass("LockOn");
    $("#divmessage").addClass("LockOff");
}
function SaveEdit()
{
    var area_id=$("#txtcityid").val();
    var area_name=$("#txtcityname").val();
    var area_pincode=$("#txtcitypincode").val();
      $.ajax({
      url: "connection.php",
      type: "post",
      data: {tablename:"area",area_id:area_id,colname1:"area_name",newval1:area_name,
                                colname2:"area_pincode",newval2:area_pincode,action:"Edit"},
      success: function (data)
       {  
        location.reload();
        return true;
    },
  error: function(xhr,status,error)
  {
    alert('Error' + status.d);
    return false;
  }
    });
}
function Insert()
{
    
    var area_name=$("#txtcityname").val();
      $.ajax({
      url: "connection.php",
      type: "post",
      data: {tablename:"gallery",colname1:"gallery_path",newval1:area_name,
        colname2:"area_pincode",newval2:area_pincode,action:"Insert"},
      success: function (data)
       {
        alert ("Success");
        alert(data);  
        location.reload();
        return true;
    },
  error: function(xhr,status,error)
  {
    alert('Error' + status.d);
    return false;
  }
    });
}

    function DeleteRecord(area_id)
   {
      $.ajax({
      url: "connection.php",
      type: "post",
      data: {tablename:"area",area_id:area_id,action:"Delete"},
      success: function (data)
       {  
        location.reload();
        return true;
    },
  error: function(xhr,status,error)
  {
    alert('Error' + status.d);
    return false;
  }
    });

   }

</script>

<div id="divmessage" class="LockOff">
   <label id="lblcityid" style="display:none;">Area Id:</label>
   <input type="textbox" id="txtcityid" style="display:none;" disabled>
   <br> 
   <label id="lblcityname" style="color: black;">Image:</label>
   <input type="file" style="color: black;" id="txtcityname"><br>
   <br>
   <button id="butok"  onClick="SaveEdit()" >Save </button>
   <button id="butInsert"  value="Insert" onClick="Insert()">Save </button>
   <button id="butcancel" value="Cancel" onclick="CancelEdit()" > Cancel</button>
</div>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Area</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Area Table - EventsHap</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php
                                    echo '<input type="button" value="Insert" id="butInsert"  onclick="InsertRecord()"></td>';
                            
                                        $connection = new mysqli("localhost","root","","eventshap");
                                           $query="Select mm. area_id, 
                                                                    area_name as 'Area Name',
                                                                    area_pincode as 'Area Pincode' 
                                                                    from area mm 
                                                                    order by area_id";

                                            $result= $connection->query($query);
                                            $rowcount=mysqli_num_rows($result);
                                            $fieldinfo = $result -> fetch_fields();

  
                                            if ($rowcount>0)
                                            {
                                                echo '<tr>';
                                                $i=1;
                                                // loop for printing table headinng
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

                                                echo '<td>Delete</td></tr>';
                                                
                                             // loop to display records in table
                                              while ($row = $result ->fetch_assoc()) 
                                              {
                                                echo '<tr>';
                                                $i=1;
                                                // loop of column in each row
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
                                           
                                                
                                                   
                                                                                         
                                                  echo '<td><input type="button" value="Delete" id="butdel'. $row["area_id"] .'" onclick="DeleteRecord('. $row["area_id"] .')"></td>';
                                                  echo '</tr>';                                                     
                                              }
                                            }

                                    ?>

                                </table>
            </div>
            <!-- End of Main Content -->

 <?php

include('includes/scripts.php');
include('includes/footer.php');

?>

