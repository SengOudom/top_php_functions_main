<!-- array_shift — Shift an element off the beginning of array -->
<?php
echo '<pre>';
// array_shift

$numbers = [1, 2, 3, 4];
var_dump(array_shift($numbers));
var_dump($numbers);

$numbers = ["ali", "reza", "hamid"];
var_dump(array_shift($numbers));
var_dump($numbers);
