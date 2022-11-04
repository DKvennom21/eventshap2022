<?php
class General
{	
//  public $connection;
public static $error_message;


 function sendmail($mailid,$sub,$content)
{
$to_email = $mailid;
$subject = $sub;
$body = $content;
$headers = "From: Eventshap2021@gmail.com";

if (mail($to_email, $subject, $body, $headers)) 
{
    $result ="true";
} else 
{
    $result= "false";
}
return $result;
}

function getTableData($query)
{
	$connection = new mysqli("localhost","root","","eventshap");
    $result=$connection->query($query);
    return $result;
}
function getHtmlTable()
{
	
}


function getRowCount($query)
{
	$connection = new mysqli("localhost","root","","eventshap");
	$result=$connection->query($query);
	$rowcount = mysqli_num_rows($result);
	return $rowcount;
}
}
?>