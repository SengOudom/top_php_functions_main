array_unshift — Prepend one or more elements to the beginning of an array
<?php
echo '<pre>';
// array_unshift

$numbers = [1, 2, 3, 4];
var_dump(array_unshift($numbers, 0));
var_dump($numbers);

$numbers = ["ali", "reza", "hamid"];
var_dump(array_unshift($numbers, "mohammad"));
var_dump($numbers);

