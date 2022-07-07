<?php
require_once 'FPDF/fpdf.php';

session_start();
include("conn.php");
error_reporting(0);

$rest = $_SESSION['rest'] ;
$sql="SELECT * FROM $rest ";
$que = mysqli_query($conn,$sql);
  $subname1 = $_SESSION['sub1'] ;
  $subname2 = $_SESSION['sub2'] ;
  $subname3 = $_SESSION['sub3'] ;
  $subname4 = $_SESSION['sub4'] ;
  $subname5 = $_SESSION['sub5'] ;
  
  $examtype = $_SESSION['examtype'] ;
  $class = $_SESSION['class'] ;
  $schoolname = $_SESSION['schoolname'] ;
  $year = $_SESSION['year'] ;


$pdf = new FPDF('l','mm',array(300,700));
$pdf->SetFont('Arial','B',16);
$pdf->SetMargins(90,20,50);
$pdf->AddPage();
$pdf->Cell(514,10,$examtype,1,1,'C');
$pdf->Cell(172,10,$class,1,0,'C');
$pdf->Cell(171,10,$schoolname,0,0,'C');
$pdf->Cell(171,10,"Session : ".$year,1,1,'C');
$pdf->Cell(35,10,'Rollno',1,0,'C');
$pdf->Cell(80,10,'Name',1,0,'C');
$pdf->Cell(57,10,$subname1,1,0,'C');
$pdf->Cell(57,10,$subname2,1,0,'C');
$pdf->Cell(57,10,$subname3,1,0,'C');
$pdf->Cell(57,10,$subname4,1,0,'C');
$pdf->Cell(57,10,$subname5,1,0,'C');
$pdf->Cell(57,10,'Total Marks ',1,0,'C');
$pdf->Cell(57,10,'Percentage',1,1,'C');

while($row=mysqli_fetch_assoc($que))
	{
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(35,10,$row['rollno'],1,0,'C');
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(80,10,$row['sn'],1,0,'C');
		$pdf->Cell(57,10,$row['sub1'],1,0,'C');
		$pdf->Cell(57,10,$row['sub2'],1,0,'C');
		$pdf->Cell(57,10,$row['sub3'],1,0,'C');
		$pdf->Cell(57,10,$row['sub4'],1,0,'C');
		$pdf->Cell(57,10,$row['sub5'],1,0,'C');
		$pdf->Cell(57,10,$row['tm'],1,0,'C');
		$pdf->Cell(57,10,$row['per'],1,1,'C');
		
	}
$file = time().'.pdf';
$pdf->Output($file,'D');





?>