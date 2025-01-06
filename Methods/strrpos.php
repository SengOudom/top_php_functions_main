strrpos — Find the position of the last occurrence of a substring in a string
<?php
echo '<pre>';
// strrpos
$str = "Hello World o o o o  o";
$a = strrpos($str, "o");
print_r(strlen($str));
echo "\n";
print_r($a);
echo "\n";

// offset
$foo = "0123456789a123456789b123456789c";

// Looking for '0' from the 0th byte (from the beginning)
print_r(strrpos($foo, '0', 0));
echo "\n";
// int(0)

// Looking for '0' from the 1st byte (after byte "0")
print_r(strrpos($foo, '0', 1));
echo "\n";
// bool(false)

// Looking for '7' from the 21th byte (after byte 20)
print_r(strrpos($foo, '7', 20));
echo "\n";
// int(27)
