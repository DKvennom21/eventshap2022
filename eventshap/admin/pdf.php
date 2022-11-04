<?php
    include('connect.php');
    include('pdf/fpdf.php');

    class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/logo_dark.png',10,10,50);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Event History',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$display_heading = array('event_id'=>'ID', 'event_category'=> 'Category Name', 'event_name'=> 'Event Name',
'event_date'=> 'Event Date','event_time'=> 'Event Time','event_agegrp'=> 'Event Age Group','event_fee'=> 'Event Fee'
,'event_venue'=> 'Event Venue','event_area'=> 'Event Area','event_pin'=> 'Event Pincode','event_descrip'=> 'Event Description'
,'event_added'=> 'Event Added On');

$result = mysqli_query($con, "SELECT event_id, event_category, event_name, event_date, event_time, event_agegrp
, event_fee, event_venue, event_area, event_pin, event_descrip, event_added FROM event_master") or die("database error:". mysqli_error($conn));
$header = mysqli_query($con, "SHOW columns FROM event_master WHERE feild != 'event_path'");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>
?>