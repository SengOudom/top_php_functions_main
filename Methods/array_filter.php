array_filter — Filters elements of an array using a callback function
<?php
echo "<pre>";
// array_filter
$names = [
    "reza",
    "ali",
    "erfan",
    "eri",
    "efi",
    "enti",
    "entesar",
    "amirreza",
    "far",
    "farzad",
    "farshad",
    "faryad",
    "farhad",
    "farid",
    "farideh",
    "faride",
    "farzane",
    "ofah",
    "farrokh",
    "fosh",
    "ofogh",
    "",
    "",
    null
];
print_r($names);
$names = array_filter($names);
print_r($names);

$names = array_filter($names, function($name) {
    if($name[0] === "f") return true;
    return false;
});
print_r($names);

$names = array_filter($names, function($name) {
    if(empty($name)) return false;
    return true;
});
print_r($names);
echo "</pre>";
// $names = array_filter($names, function($name) {
//     return $name[0] !== "f";
// });
// print_r($names);
