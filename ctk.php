<?php
require_once 'bootstrap.php';
require_once 'vendor/autoload.php';

// Creating the new document...

$id = $_POST['id'];
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
$price = $_POST['price'];


$cd = date("d-m-Y");
echo "Today is " .$cd;

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$template = new \PhpOffice\PhpWord\TemplateProcessor('invoice.docx');
$template->setValue('tanggal', $cd);
$template->setValue('ID', $id);
$template->setValue('full_name', $full_name);
    $template->saveAs('result.docx');


/*
// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('helloWorld.docx');

// Saving the document as ODF file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
$objWriter->save('helloWorld.odt');

// Saving the document as HTML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
$objWriter->save('helloWorld.html');

/* Note: we skip RTF, because it's not XML-based and requires a different example. */
/* Note: we skip PDF, because "HTML-to-PDF" approach is used to create PDF documents. */
?>