<?php
$givenString = "Hello, World!";

$length = strlen($givenString);
echo "String Length: $length<br>";

$reversedString = strrev($givenString);
echo "Reversed String: $reversedString<br>";

$uppercaseString = strtoupper($givenString);
echo "Uppercase String: $uppercaseString<br>";

$lowercaseString = strtolower($givenString);
echo "Lowercase String: $lowercaseString<br>";
?>
