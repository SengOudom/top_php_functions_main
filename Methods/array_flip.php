<!--array_flip — Exchanges all keys with their associated values in an array -->
<?php
echo "<pre>";
// array_flip
$names = [
    "reza",
    "hamid",
    "ali",
    "farzad",
    "abbas",
    "amirreza",
    "far"
];
$names = array_flip($names);
print_r($names);
echo "</pre>";