<?php

//$myFile = "sensed_data.txt";
$myFile = "data".date("dmy") . ".txt";
echo $myFile;
$fh = fopen($myFile, 'a') or die("can't open file");
$a=time();
$b = date('d,m,y,H,i,s,', $a);
$stringData = $b. $_GET['msg']  . "\n";
fwrite($fh, $stringData);
fclose($fh);

// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
//file_put_contents($myFile, $stringData, FILE_APPEND | LOCK_EX);

// Open the file to get existing content
//$current = file_get_contents($myfile);
// Append a new person to the file
//$current .= $stringData;
// Write the contents back to the file
//file_put_contents($file, $current);

?>