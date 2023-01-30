
<?php

include_once('conn.php');
$url ='C:/wamp64/www/CareFare_Services/invoice.php'; 
header('Content-Type: application/pdf'); 
  
// It will be called downloaded.pdf 
header('Content-Disposition: attachment; filename="abc.pdf"'); 
// Open the file to get existing content
$current = file_get_contents($url);
// Append a new person to the file
// Write the contents back to the file

echo  $current;


 
?>