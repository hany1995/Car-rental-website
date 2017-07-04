<?php
if ($_POST ){
if (isset($_POST['submit'])AND $_POST ['submit']== "For Reservation"){
ini_set('error_reporting', 'E_ALL | E_STRICT');
// ini_set('error_reporting', 'E_ALL & ~E_NOTICE');

// production
// ini_set('error_reporting', 'E_ALL & ~E_DEPRECATED');


// development
ini_set('display_errors', 'On');

require_once 'FPDF/fpdf.php';
include 'database.php';
        $k = "vars.php";
        $felo = new database($k);
$result=mysql_query("select * from reserve");
$num = mysql_num_rows($result);


$column_location = "";
$column_returnLocation = "";
$column_pickUpDate = "";
$column_returnDate = "";
$column_selectCar = "";



while($row = mysql_fetch_array($result))
{
     
    $location = $row["location"];
    $returnLocation = $row["returnLocation"];
    $pickUpDate = $row["pickUpDate"];
    $returnDate = $row["returnDate"];
    $selectCar = $row["selectCar"];
   
   

$column_location = $column_location.$location."\n";
$column_returnLocation =$column_returnLocation .$returnLocation."\n"  ;
$column_pickUpDate = $column_pickUpDate.$pickUpDate."\n";
$column_returnDate = $column_returnDate.$returnDate."\n";
$column_selectCar = $column_selectCar.$selectCar."\n";



    
    
}



$pdf=new FPDF();
$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);


$pdf->Cell(30,6,'PU Location',1,0,'L',1);
$pdf->SetX(30);
$pdf->Cell(30,6,'R Location',1,0,'L',1);

$pdf->SetX(50);
$pdf->Cell(30,6,'Pick Up Date',1,0,'L',1);

$pdf->SetX(80);
$pdf->Cell(30,6,' Return Date',1,0,'L',1);

$pdf->SetX(110);
$pdf->Cell(60,6,'Select Car',1,0,'L',1);




$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(30,6,$column_location,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);

$pdf->MultiCell(30,6,$column_returnLocation,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(50);
$pdf->MultiCell(30,6,$column_pickUpDate,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(30,6,$column_returnDate,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(60,6,$column_selectCar,1);



$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);


//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row

 $rnd=  rand(0, 200);
  $pdf->Output(F,'C:\AppServ\www\Car Rent'.$rnd.'.pdf'); 
//$pdf->Output();
    echo '<script>alert("Downloaded");</script>';
    

}}
