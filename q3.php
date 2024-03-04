<?php
// Prompt user for a string
$string = readline("Enter a string: ");

// Convert string to uppercase using character array
$upperString = "";
$length = strlen($string);
for ($i = 0; $i < $length; $i++) {
    $upperString .= strtoupper($string[$i]);
}

// Output the uppercase string
echo "Uppercase string: " . $upperString;
?>
