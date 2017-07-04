<?php
if ($_POST ){
if (isset($_POST['submit'])AND $_POST ['submit']== "For Users"){
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
$result=mysql_query("select * from users");
$num = mysql_num_rows($result);

$column_id = "";
$column_firstname = "";
$column_lastname = "";
$column_username = "";
$column_email = "";
$column_password = "";
$column_mobnum = "";
$column_ssn = "";
$column_BoD = "";



while($row = mysql_fetch_array($result))
{
     $id = $row["id"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $username = $row["username"];
    $email = $row["email"];
    $mobnum = $row["mobnum"];
    $ssn = $row["ssn"];
    $BoD = $row["BoD"];
   

$column_id = $column_id.$id."\n";
$column_firstname =$column_firstname .$firstname."\n"  ;
$column_lastname = $column_lastname.$lastname."\n";
$column_username = $column_username.$username."\n";
$column_email = $column_email.$email."\n";
$column_mobnum = $column_mobnum.$mobnum."\n";
$column_ssn = $column_ssn.$ssn."\n";
$column_BoD = $column_BoD.$BoD."\n";



    
    
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
$pdf->Cell(30,6,'first name',1,0,'L',1);

$pdf->SetX(50);
$pdf->Cell(30,6,'Last Name',1,0,'L',1);

$pdf->SetX(80);
$pdf->Cell(30,6,' UserName',1,0,'L',1);

$pdf->SetX(110);
$pdf->Cell(60,6,'Email',1,0,'L',1);


$pdf->SetX(150);
$pdf->Cell(60,6,'MobNum',1,0,'L',1);

$pdf->SetX(180);
$pdf->Cell(60,6,'ssn',1,0,'L',1);

$pdf->SetX(250);
$pdf->Cell(30,6,'BOD',1,0,'L',1);

$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(15,6,$column_id,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);

$pdf->MultiCell(30,6,$column_firstname,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(50);
$pdf->MultiCell(30,6,$column_lastname,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(30,6,$column_username,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(60,6,$column_email,1);



$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(60,6,$column_mobnum,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(60,6,$column_ssn,1);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(250);
$pdf->MultiCell(30,6,$column_BoD,1);


//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row

 $rnd=  rand(0, 200);
  $pdf->Output(F,'C:\AppServ\www\Car Rent'.$rnd.'.pdf'); 
//$pdf->Output();
    echo '<script>alert("Downloaded");</script>';
    

}}
