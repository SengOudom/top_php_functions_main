htmlspecialchars — Convert special characters to HTML entities
<?php
echo '<pre>';
// htmlspecialchars

/*
    Convert special characters to HTML entities
    e.g. : 
        "<" convert to "&lt;"
        ">" convert to "&gt;"
        ...
*/
$str = "The word <b>text</b> is bold";
echo htmlspecialchars($str)."\n";
// HTML output will be "The word &lt;b&gt;text&lt;/&gt; is bold"

$str = "My name is 'Ali'";
echo htmlspecialchars($str)."\n";

$str = "What is decrement & increment ?";
echo htmlspecialchars($str)."\n";