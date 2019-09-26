<?php


//ini buat word
$word = new COM("Word.Application") or die ("Could not initialise Object.");
  // set it to 1 to see the MS Word window (the actual opening of the document)
  $word->Visible = 0;
  // recommend to set to 0, disables alerts like "Do you want MS Word to be the default .. etc"
  $word->DisplayAlerts = 0;
  // open the word 2007-2013 document 
  $word->Documents->Open('C:\xampp\htdocs\test\KP-Form-baru\result.docx');
  // save it as word 2003
  $word->ActiveDocument->SaveAs('C:\xampp\htdocs\test\KP-Form-baru\result2.doc');
  // convert word 2007-2013 to PDF
  $word->ActiveDocument->ExportAsFixedFormat('C:\xampp\htdocs\test\KP-Form-baru\pdf.pdf', 17, false, 0, 0, 0, 0, 7, true, true, 2, true, true, false);
  // quit the Word process
  $word->Quit(false);
  // clean up
  unset($word);

// ini buat pdf
  $file = 'pdf.pdf'; 
$filename = 'pdf.pdf'; 
  
// Header content type 
header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' . $filename . '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Read the file 
@readfile($file); 

//ini buat cetak
echo '<body onload="window.print()">';
  ?>