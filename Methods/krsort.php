krsort — Sort an array by key in descending order
<?php
echo '<pre>';
// krsort

$fruits = [
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
];
print_r($fruits);
krsort($fruits);
print_r($fruits);
