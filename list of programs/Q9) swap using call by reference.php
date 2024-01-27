<?php

function swapByReference(&$a, &$b) {
    $variable = $a;
    $a = $b;
    $b = $variable;
    echo "Inside swapByReference function: \$a = $a, \$b = $b\n";
}

$x = 10;
$y = 20;

echo "Before swap: \$x = $x, \$y = $y\n";
swapByReference($x, $y);
echo "After swap: \$x = $x, \$y = $y\n";

?>
