<?php
// Function to compute addition of two matrices
function matrixAddition($matrix1, $matrix2) {
    $rows = count($matrix1);
    $columns = count($matrix1[0]);
    $result = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

// Prompt user for matrix size
$rows = (int)readline("Enter number of rows: ");
$columns = (int)readline("Enter number of columns: ");

// Initialize matrices
$matrix1 = [];
$matrix2 = [];

// Prompt user for matrix values
echo "Enter values for matrix 1:\n";
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {
        $matrix1[$i][$j] = (int)readline("Enter value for [$i][$j]: ");
    }
}

echo "Enter values for matrix 2:\n";
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {
        $matrix2[$i][$j] = (int)readline("Enter value for [$i][$j]: ");
    }
}

// Compute addition of matrices
$result = matrixAddition($matrix1, $matrix2);

// Output the result matrix
echo "Resultant matrix:\n";
foreach ($result as $row) {
    echo implode(" ", $row) . "\n";
}
?>
