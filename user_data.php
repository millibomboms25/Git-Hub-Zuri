<?php
$filename= "./userdata.csv";
$handle= fopen("./userdata.csv","r");

$contents= fread($handle,filesize($filename));


echo $contents;
fclose($handle);

$name=$_POST ["name"];
$email=$_POST ["email"];
$dob=$_POST ["dob"];
$gender=$_POST ["gender"];
$country=$_POST ["country"];


echo "NAME:" .$name. "<br>";
echo "EMAIL:" .$email. "<br>";
echo "DATE OF BIRTH:" .$dob. "<br>";
echo "GENDER:" .$gender. "<br>";
echo "COUNTRY:" .$country. "<br>";



?>