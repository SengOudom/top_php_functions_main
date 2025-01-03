headers_sent — Checks if or where headers have been sent
<?php
echo '<pre>';
// headers_sent
// header("Name: test");
if (headers_sent()) {
    echo 'if';
} else {
    echo 'else';

}