strpos — Find the position of the first occurrence of a substring in a string
<?php
echo '<pre>';
// strpos
$str = "Hello World o o o o  o";
print_r(strpos($str, "o"));
echo "\n";
print_r(strpos($str, "o", 4));
echo "\n";
print_r(strpos($str, "o", 4+1));
echo "\n";

$looking_for = "o";
$offset = 0;
while (true) {
    $offset = strpos($str, $looking_for, $offset);
    if ($offset === false) break;
    $offset++;
    var_dump($offset);
}

$str = "Hello World o o o o  o";
$pos = strpos($str, "o");
var_dump($pos);
$str = substr($str, $pos+1);
var_dump($str);
$pos = strpos($str, "o");
var_dump($pos);
