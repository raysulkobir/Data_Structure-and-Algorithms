<?php
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($arr[$mid] == $target) {
            return $mid; // Element found, return its index
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1; // Target is in the right half
        } else {
            $right = $mid - 1; // Target is in the left half
        }
    }

    return -1; // Element not found
}

// Example usage:
$myArray = [10, 20, 30, 40, 50, 60, 70];
$targetElement = 70;
$result = binarySearch($myArray, $targetElement);

if ($result != -1) {
    echo "Element found at index: " . $result;
} else {
    echo "Element not found in the array.";
}
