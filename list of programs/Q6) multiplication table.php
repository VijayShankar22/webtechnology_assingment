<?php
$number = $_GET['number'] ?? 8;

echo "<h2>Multiplication Table of $number</h2>";
echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "<tr><td>$number x $i</td><td>$result</td></tr>";
}

echo "</table>";
?>