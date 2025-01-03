array_key_exists — Checks if the given key or index exists in the array
<?php
echo '<pre>';
// array_key_exists
$list = [
    "a",
    "b",
    "c"
];
var_dump(array_key_exists("a", $list));
var_dump(array_key_exists("x", $list));
// Error: var_dump(array_key_exists($list, "x"));

var_dump(array_key_exists("1", $list));
var_dump(array_key_exists("10", $list));
echo '</pre>';

