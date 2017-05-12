<?php
$myfile = fopen("t.txt", "r") or die("Unable to open file!");
$value = fread($myfile,filesize("t.txt"));
fclose($myfile);
echo 'rebkruys'.$value.'jhdjksd';
?>