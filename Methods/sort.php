sort — Sort an array in ascending order
<?php
echo '<pre>';
// sort
$numbers = [];
$howmany = 20;

for($i=1;$i<=$howmany;$i++) {
    $numbers[] = rand(1, 100);
}

print_r($numbers);
$numbers = sort($numbers);
print_r($numbers);
