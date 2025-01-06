version_compare — Compares two "PHP-standardized" version number strings
<?php
echo '<pre>';
// version_compare

var_dump(PHP_VERSION); // 8.1.6

if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
    print 'yes';
} else {
    print 'no';
}
echo "\n";
if (version_compare('1.3.4', '7.0.0') >= 0) {
    print 'yes';
} else {
    print 'no';
}
echo "\n";
if (version_compare('1.3.4', '7.0.0') < 0) {
    print 'yes';
} else {
    print 'no';
}

