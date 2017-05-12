<?php
$myfile = fopen("t.txt", "r") or die("Unable to open file!");
$value = fread($myfile,filesize("t.txt"));
fclose($myfile);
echo 'rebkruys'.$value.'jhdjksd';

$myfile2 = fopen("i.txt", "r") or die("Unable to open file!");
$value2 = fread($myfile2,filesize("i.txt"));
fclose($myfile2);
echo 'IP<br>'.$value2 ;
?>