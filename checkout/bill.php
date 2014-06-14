<?php
session_start();
require('/opt/lampp/lib/php/fpdf.php');
class PDF extends FPDF
{
function Header(){
$this->SetFont('Times',"",12);
$this->SetY(0.25);
$this->Cell(0,.25,"T-Shirt Express(Project)".$this->PageNo(),'T',2,"R");
//reset Y
//$this->SetY(1);
}

function footer(){
//This is the footer; its reeated on each page, enter filename;:
//phpjabber logo, x
//position:(page wdth/2)-half the picture size
$this->Image("/opt/lampp/htdocs/project/logo.jpg",(8.5/2)-1.5,9.8,3,1,"JPG","http://www.phpjabbers.com");


}




}

$pdf=new PDF("P","in","Letter");
$pdf->SetMargins(1,1,1);
$pdf->AddPage();
$pdf->SetFont('Times',"",12);

$lipsum1="Customer Name:";
$lipsum2="$_SESSION[name]";
$lipsum3="Customer ID:";
$lipsum4="$_SESSION[uid]";
$lipsum5="Customer Address:";
$lipsum6="$_SESSION[address]";
$lipsum7="$_SESSION[city]";
$lipsum8="$_SESSION[state]";
$lipsum9="$_SESSION[zip]";
$lipsum10="Customer EmailID:";
$lipsum11="$_SESSION[email]";
$lipsum12="Price:";
$lipsum13="$_SESSION[price] Rs.";
//$lipsum12="Order ID:";
//$lipsum13="$_SESSION[oid]";
//$lipsum14="Product ID:";
//$lipsum15="$_SESSION[pid]";





$pdf->SetFillColor(240,100,100);
$pdf->SetFont('Times','BU',12);


$pdf->Cell(0,.25,"T-Shirt Bill",1,2,"C",1);

$pdf->SetFont('Times',"",12);

$pdf->MultiCell(0,0.25,$lipsum1,'LR',"L");
$pdf->MultiCell(0,0.25,$lipsum2,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum3,'LR',"L");
$pdf->MultiCell(0,0.25,$lipsum4,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum5,'LR',"L");
$pdf->MultiCell(0,0.25,$lipsum6,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum7,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum8,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum9,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum10,'LR',"L");
$pdf->MultiCell(0,0.25,$lipsum11,'LR',"R");
$pdf->MultiCell(0,0.25,$lipsum12,'LR',"L");
$pdf->MultiCell(0,0.25,$lipsum13,'LR',"R");
//$pdf->MultiCell(0,0.25,$lipsum14,'LR',"L");
//$pdf->MultiCell(0,0.25,$lipsum15,'LR',"R");

//$pdf->MultiCell(0,0.25,$lipsum2,1,"R");
//$pdf->MultiCell(0,0.25,$lipsum3,'B',"J");
//$pdf->AddPage();
//$pdf->Write(0.5,$lipsum1.$lipsum2.$lipsum3);

$pdf->Output();
?>
