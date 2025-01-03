file_get_contents — Reads entire file into a string
<?php
echo '<pre>';
// file_get_contents
$data = file_get_contents("array_keys.php");
print $data;

var_dump(filesize("array_keys.php"));

$f = fopen("array_keys.php", "r");
$data = fread($f, filesize("array_keys.php"));
print $data;
fclose($f);
