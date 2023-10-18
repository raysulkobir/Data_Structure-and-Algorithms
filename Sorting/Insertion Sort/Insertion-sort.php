<?php
function insertionSort($array)
{
    $length = count($array);

    for ($i = 1; $i < $length; $i++) {
        $key = $array[$i]; // s-1: 9; s-2: 7; s-3: 6
        $j = $i - 1; // s-1: 1-; s-2: 0; s-3: 1;

        // Move elements of the sorted portion of the array
        // that are greater than the key to the right
        while ($j >= 0 && $array[$j] > $key) { // s-1: 9 > 9; s-2: 9 > 7; s-3: 9 > 6;
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        // Insert the key into the correct position
        $array[$j + 1] = $key;
    }

    return $array;
}

// Example usage
$unsortedArray = [9, 7, 15, 17, 5, 10, 11];
$sortedArray = insertionSort($unsortedArray);

echo "Sorted array: " . implode(", ", $sortedArray);
