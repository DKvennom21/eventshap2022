
<?php
include('includes/General.php');
 
 $object= new General();

if (isset($_POST['action']))
{


if($_POST['action'] == 'Delete')
{
	
		$tablename=$_POST['tablename'];
		$area_id=$_POST['area_id'];
        $connection = new mysqli("localhost","root","","eventshap");
    $query="Delete from " .$tablename . " where area_id=" .$area_id;
    $query_run=$connection->query($query);
    if($query_run>=1)
    {
        echo  json_encode('Record Deleted');
    }
    else
    {
       echo  json_encode('Error') ;
    }
}



if($_POST['action'] == 'Edit')
{
       // echo 'Edit';
		$tablename=$_POST['tablename'];
		$area_id=$_POST['area_id'];
		$colname1=$_POST['colname1'];
        $colname2=$_POST['colname2'];
		$newval1=$_POST['newval1'];
        $newval2=$_POST['newval2'];
        $connection = new mysqli("localhost","root","","eventshap");
    $query="update ".$tablename." set ".$colname1."='".$newval1."',".$colname2."='".$newval2."' WHERE area_pincode='".$area_id."'";       
    
    $query_run= $connection->query($query);
    if($query_run>=1)
    {
        echo  json_encode('Record Updated');
    }   
    else
    {
       echo  json_encode('Error') ;
    }
}
if($_POST['action'] == 'Insert')
{
       // echo 'Edit';
		$tablename=$_POST['tablename'];		
		$colname1=$_POST['colname1'];
        $colname2=$_POST['colname2'];
		$newval1=$_POST['newval1'];
        $newval2=$_POST['newval2'];

       $connection = new mysqli("localhost","root","","eventshap");
      $query="insert into " . $tablename . " (" . $colname1 . ",".$colname2.") values('" .$newval1 ."','".$newval2."')";
      $query_run= $connection->query($query);
    if($query_run>=1)
    {
        echo  json_encode('Record Inserted');
    }   
    else
    {
       echo  json_encode('Error') ;
    }
}
}
else
{
	echo  json_encode('action not set');
}

?>