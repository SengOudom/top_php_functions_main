<!--array_reverse — Return an array with elements in reverse order -->
<?php
// array_reverse
echo '<pre>';

$list = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j'
];
var_dump($list);
var_dump(array_reverse($list));
var_dump($list);

$list = array_reverse($list);
var_dump($list);
