parse_url — Parse a URL and return its components
<?php
echo '<pre>';
// parse_url
$url = parse_url("http://www.example.com/path/to/file.php?id=1&name=John");
var_dump($url);

$url = parse_url("https://onlinephp.io/parse-url/manual");
print_r($url);

$url = parse_url("http://www.example.com/path/to/file.php");
var_dump($url);

// Bad practice:
$url = parse_url("google.com");
var_dump($url);
