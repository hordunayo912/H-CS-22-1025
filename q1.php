<?php
// Prompt user for three numbers
$number1 = (int)readline("Enter first number: ");
$number2 = (int)readline("Enter second number: ");
$number3 = (int)readline("Enter third number: ");

// Store numbers in an array
$numbers = [$number1, $number2, $number3];

// Sort the array in ascending order
sort($numbers);

// Output the sorted numbers
echo "Numbers in ascending order: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
