current — Return the current element in an array
<?php
echo '<pre>';
// current
$numbers = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10
];

var_dump($numbers[0]);

print_r(current($numbers));

