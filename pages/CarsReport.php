<?php

if ($_POST ){
if (isset($_POST['submit'])AND $_POST ['submit']== "For Cars"){
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
$result=mysql_query("select * from cars");
$num = mysql_num_rows($result);

$column_carID = "";
$column_modelName= "";
$column_price = "";
$column_color = "";



while($row = mysql_fetch_array($result))
{
     $carID = $row["carID"];
    $modelName = $row["modelName"];
    $price = $row["price"];
    $color = $row["color"];
    
   

$column_carID = $column_carID.$carID."\n";
$column_modelName =$column_modelName .$modelName."\n"  ;
$column_price = $column_price.$price."\n";
$column_color = $column_color.$color."\n";



    
    
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


$pdf->Cell(15,6,'id',1,0,'L',1);
$pdf->SetX(20);
$pdf->Cell(30,6,'Car Name',1,0,'L',1);

$pdf->SetX(50);
$pdf->Cell(30,6,'Price',1,0,'L',1);

$pdf->SetX(80);
$pdf->Cell(30,6,' Color',1,0,'L',1);

$pdf->SetX(110);


$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(15,6,$column_carID,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);

$pdf->MultiCell(30,6,$column_modelName,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(50);
$pdf->MultiCell(30,6,$column_price,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(30,6,$column_color,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);



//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row

 $rnd=  rand(0, 200);
  $pdf->Output(F,'C:\AppServ\www\Car Rent'.$rnd.'.pdf'); 
//$pdf->Output();
    echo '<script>alert("Downloaded");</script>';
    

}}
