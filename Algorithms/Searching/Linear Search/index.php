<?php
function linearSearch($arr, $target) {
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $target) {
            return $i; // Return the index where the target element was found
        }
    }
    
    return -1; // Return -1 if the target element was not found in the array
}

// Example usage:
$myArray = [10, 23, 5, 7, 8, 12];
$targetElement = 700;

$result = linearSearch($myArray, $targetElement);

if ($result != -1) {
    echo "Element found at index $result.";
} else {
    echo "Element not found in the array.";
}
