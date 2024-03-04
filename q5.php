<?php
// Declare and initialize array
$alpha = [];
for ($i = 0; $i < 50; $i++) {
    if ($i < 25) {
        $alpha[$i] = $i * $i; // First 25 components equal to the square of the index variable
    } else {
        $alpha[$i] = 3 * $i; // Last 25 components equal to three times the index variable
    }
}

// Output array with 10 elements per line
$count = 0;
foreach ($alpha as $element) {
    echo $element . " ";
    $count++;
    if ($count % 10 == 0) {
        echo "\n";
    }
}
?>
