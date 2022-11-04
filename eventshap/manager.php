 <?php
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
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

<script type="text/javascript">
function DeleteRecord(id)
{
    $("#lbldelid").text(id);
    //alert ("entered in deleterecord" + $("#lbldelid").text());
    //var msgbox = document.getElementById("divmessage");
    //msgbox.ClassName="LockOn";
    
    $("#divmessage").removeClass("LockOff");
    $("#divmessage").addClass("LockOn");

}
function ConfirmDelete()
{
    var id=$("#lbldelid").text();
      $.ajax({
      url: "connection.php",
      type: "POST",
      data: {tablename:"manager",id:id,action:"Deletemanager"},
      success: function (data)
       {
        //alert ("Success");
        //alert(data);  
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
function CancelDelete()
{
   $("#divmessage").removeClass("LockOn");
    $("#divmessage").addClass("LockOff");

}
function EditRecord(id)
{
  $.ajax({
      url: "connection.php",
      type: "POST",
      data: {id:id,action:"Editmanager"},
      success: function (data)
       {
        //alert ("Success");
        //alert(data);  
        window.location.replace("http://localhost/deque/profilea_edit.php");
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
        <label id="lbldelid" style="display:none;"></label>
   <label id="lblmessage">Do you Want to Delete Record?</label>
   <br>
   <button id="butok"  v onClick="ConfirmDelete()" >Yes </button>
   <button id="butcancel" value="Cancel" onclick="CancelDelete()" > No</button>
</div>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Managers</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manager table-DeQue</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   
                                     <?php
                                        $connection = new mysqli("localhost","root","","deque");
                                           $query="select mm.id,username as 'Manager Name' ,email as 'E-Mail', name as 'Restaurant Name',rm.address as 'Address' from manager mm left  join restaurant rm on mm.id=rm.managerid order by mm.id";

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
                                                echo '<td>Edit</td>                                              <td>Delete</td></tr>';
                                                

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
                                                  // code...
                                                }
                                           echo '<td><input type="button" value="Edit"
                                            onclick="EditRecord(' . $row["id"] . ')" id="butedit'. $row["id"] . '"></td>';                                           
                                        echo '<td><input type="button" value="Delete" onclick="DeleteRecord('. $row["id"] . ')"  id="butdel'. $row["id"] .'" ></td>';

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

