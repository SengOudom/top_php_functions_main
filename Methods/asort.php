asort — Sort an array in ascending order and maintain index association
<?php
echo '<pre>';
// asort

$fruits = [
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
];
print_r($fruits);
asort($fruits);
print_r($fruits);
