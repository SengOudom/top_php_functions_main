array_push — Push one or more elements onto the end of array
<?php
echo '<pre>';
// array_push

$numbers = [1, 2, 3, 4];
var_dump(array_push($numbers, 10, 12, 14));
var_dump($numbers);

$numbers[] = 100;
