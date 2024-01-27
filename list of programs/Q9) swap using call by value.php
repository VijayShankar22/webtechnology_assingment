<?php

function swapByValue($a, $b) {
    $variable = $a;
    $a = $b;
    $b = $variable;
    echo "swapByValue function: \$a = $a, \$b = $b\n";
}

$x = 10;
$y = 20;

echo "Before swap: \$x = $x, \$y = $y\n";
swapByValue($x, $y);
echo "After swap: \$x = $x, \$y = $y\n";

?>