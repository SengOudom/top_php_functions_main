<?php
// array
echo '<pre>';

$list = array(1, 2, 3, 4);
$list = [1, 2, 3, 4];

print_r($list);

echo 'array_push — Push one or more elements onto the end of array';
array_push($list, 50);
$list[] = 600;

print_r($list);

echo 'array_pop — Pop the element off the end of array';
array_pop($list);
print_r($list);

echo 'array_shift — Shift an element off the beginning of array';
array_shift($list);
print_r($list);

$res = array_pop($list);
var_dump(value: $res);

$res = array_shift($list);
var_dump($res);

print_r($list);
