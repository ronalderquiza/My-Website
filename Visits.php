<?php
$myfile = fopen("t.txt", "r") or die("Unable to open file!");
$value = fread($myfile,filesize("t.txt"));
fclose($myfile);
echo 'rebkruys'.$value.'jhdjksd';
?>

<?php
echo gethostname(); // may output e.g,: sandie
// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
?>