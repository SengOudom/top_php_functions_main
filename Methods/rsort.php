rsort — Sort an array in descending order
<?php
echo '<pre>';
// rsort

$fruits = [
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
];
print_r($fruits);
sort($fruits);
print_r($fruits);

rsort($fruits);
print_r($fruits);
