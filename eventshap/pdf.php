<?php
    include('pdf/fpdf.php');
    $db = New PDO('mysql:host=localhost;dbname=eventshap','root','');
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
    $this->Cell(80,10,'YOUR TICKET',1,0,'C');
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
    // booked stamp
    $this->Image('img/booked_stamp.png',140,230,55);
    //bottom signature
    $this->Image('img/owner_signature1.png',10,240,60);
   
}
Function headerTable()
{
    $this->SetFont('Times','B','12');
    $this->Cell(7,10,'ID',1,0,'C');
    $this->Cell(23,10,'Category',1,0,'C');
    $this->Cell(20,10,'Name',1,0,'C');
    $this->Cell(20,10,'Date',1,0,'C');
    $this->Cell(10,10,'Time',1,0,'C');
    $this->Cell(10,10,'Age',1,0,'C');
    $this->Cell(10,10,'Fee',1,0,'C');
    $this->Cell(57,10,'Venue',1,0,'C');
    /*$this->Cell(20,10,'Area',1,0,'C');
    $this->Cell(17,10,'Pincode',1,0,'C');*/
    $this->Cell(40,10,'Added on',1,0,'C');
    $this->Ln();
}
function viewTable($db)
{
    $this->SetFont('Times','','12');
    $stmt= $db->query('SELECT * FROM event_master');
    while($data = $stmt->fetch(PDO::FETCH_OBJ))
    {
        $this->Cell(7,10,$data->event_id,1,0,'C');
        $this->Cell(23,10,$data->event_category,1,0,'C');
        $this->Cell(20,10,$data->event_name,1,0,'C');
        $this->Cell(20,10,$data->event_date,1,0,'C');
        $this->Cell(10,10,$data->event_time,1,0,'C');
        $this->Cell(10,10,$data->event_agegrp,1,0,'C');
        $this->Cell(10,10,$data->event_fee,1,0,'C');
        $this->Cell(57,10,$data->event_venue,1,0,'C');
        /*$this->Cell(20,10,$data->event_area,1,0,'C');
        $this->Cell(17,10,$data->event_pin,1,0,'C');*/
        $this->Cell(40,10,$data->event_added,1,0,'C');
        $this->Ln();
    }
}
}
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>
