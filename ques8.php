<?php
function swapIntegers(&$a, &$b) {
    $a = $a ^ $b;
    $b = $a ^ $b;
    $a = $a ^ $b;
}

// Example usage
$number1 = 5;
$number2 = 10;

echo "Before swapping: A = $number1, B = $number2\n";

swapIntegers($number1, $number2);

echo "After swapping: A = $number1, B = $number2\n";
?>