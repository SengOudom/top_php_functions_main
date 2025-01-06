str_repeat — Repeat a string
<?php
echo '<pre>';
$str = str_repeat("Hello World!\n", 10);
echo $str."\n";

$str = rtrim(str_repeat("Hello World!\n", 10), "\n");
echo $str;

print "\n";
print str_repeat("*", 15);
print "\n";
for($i=0; $i<15; $i++) {
    print "*";
}
