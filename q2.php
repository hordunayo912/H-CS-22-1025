<?php
// Function to find index of smallest element in array
function smallestindex($arr, $size) {
    $smallest = $arr[0];
    $index = 0;
    for ($i = 1; $i < $size; $i++) {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}

// Test the function
$array = [5, 3, 8, 1, 9];
$size = count($array);
$smallestIndex = smallestindex($array, $size);
echo "Index of the smallest element: " . $smallestIndex;
?>
