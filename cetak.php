<?php

/*$id = $_POST['id'];
$full_name = $_POST['full_name'];
$degree = $_POST['degree'];
$inst = $_POST['inst'];
$email = $_POST['email'];
$no_phone = $_POST['no_phone'];
$no_mobile = $_POST['no_mobile'];
$st_address = $_POST['st_address'];
$city = $_POST['city'];
$region = $_POST['region'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$status = $_POST['status'];
$reg_type = $_POST['reg_type'];
$no_mai = $_POST['no_mai'];
$price = $_POST['price']; */


require("fpdf/fpdf.php");



$pdf=new FPDF();
$pdf->AddPage();
//$pdf->SetFont("Arial","B",16);
//$pdf->Cell(0,10,"welcome {$full_name}",1,1,C);
$pdf->output();

?>