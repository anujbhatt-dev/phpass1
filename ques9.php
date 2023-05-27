<?php
function reverseNumber($number) {
    $reversed = 0;
    
    while ($number > 0) {
        $remainder = $number % 10;
        $reversed = ($reversed * 10) + $remainder;
        $number = (int)($number / 10);
    }
    
    return $reversed;
}


$number = 12345;
$reversedNumber = reverseNumber($number);

echo "Original number: $number\n";
echo "Reversed number: $reversedNumber\n";
?>



