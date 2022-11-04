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
function InsertRecord()
{
    //alert ("entered in editrecord");
    //var msgbox = document.getElementById("divmessage");
    //msgbox.ClassName="LockOn";
    $("#divmessage").removeClass("LockOff");
    $("#divmessage").addClass("LockOn");
    $("#butok").hide();
    $("#butInsert").show();
    $("#txtcityname").val("");
    $("#txtcityname").focus();
}

function EditRecord(id,city_name)
{
    //alert ("entered in editrecord");
    //var msgbox = document.getElementById("divmessage");
    //msgbox.ClassName="LockOn";
    $("#divmessage").removeClass("LockOff");
    $("#divmessage").addClass("LockOn");
    $("#butok").show();
    $("#butInsert").hide();
    $("#txtcityid").val(id);
    $("#txtcityname").val(city_name);
    $("#txtcityname").focus();
}
function CancelEdit()
{
    $("#divmessage").removeClass("LockOn");
    $("#divmessage").addClass("LockOff");
}
function SaveEdit()
{
    var id=$("#txtcityid").val();
    var city_name=$("#txtcityname").val();
    //alert (id + " " + city_name);
      $.ajax({
      url: "connection.php",
      type: "POST",
      data: {tablename:"city",id:id,colname:"city_name",newval:city_name,action:"Edit"},
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
function SaveInsert()
{
    
    var city_name=$("#txtcityname").val();
    
      $.ajax({
      url: "connection.php",
      type: "POST",
      data: {tablename:"city",colname:"city_name",newval:city_name,action:"Insert"},
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

    function DeleteRecord(id)
   {
     //alert ("Entered the code , id=" +id) ;
      
      $.ajax({
      url: "connection.php",
      type: "POST",
      data: {tablename:"city",id:id,action:"Delete"},
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

</script>

<div id="divmessage" class="LockOff">
   <label id="lblcityid" style="display:none;">City Id:</label>
   <input type="textbox" id="txtcityid" style="display:none;" disabled>
   <br> 
   <label id="lblcityname">City Name:</label>
   <input type="txtbox" id="txtcityname">
   <br>
   <button id="butok"  v onClick="SaveEdit()" >Save </button>
   <button id="butInsert"   onClick="SaveInsert()">Save </button>
   <button id="butcancel" value="Cancel" onclick="CancelEdit()" > Cancel</button>
</div>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">City</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">City table-DeQue</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php
                                    echo '<input type="button" value="Insert" id="butInsert"  onclick="InsertRecord()"></td>';
                            
                                        $connection = new mysqli("localhost","root","","deque");
                                           $query="Select id,city_name as 'City Name' from city order by id";

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

                                                echo '<td>Edit</td><td>Delete</td></tr>';
                                                
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
                                           
                                                
                                        echo '<td><input type="button" value="Edit" id="butedit'. $row["id"] . '" onclick="EditRecord('. $row["id"]   . ",'" 
                                        . $row["City Name"] ."')" . '"></td>';                                           
                                        echo '<td><input type="button" value="Delete" id="butdel'. $row["id"] .'" onclick="DeleteRecord('. $row["id"] .')"></td>';
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

