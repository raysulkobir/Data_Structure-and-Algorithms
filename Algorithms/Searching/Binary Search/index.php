<?php
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    
    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);
        
        if ($arr[$mid] == $target) {
            return $mid; // Return the index where the target element was found
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    
    return -1; // Return -1 if the target element was not found in the array
}

// Example usage (assuming the array is sorted):
$myArray = [2, 5, 7, 12, 16, 23, 34, 45, 56, 67];
$targetElement = 23;

$result = binarySearch($myArray, $targetElement);

if ($result != -1) {
    echo "Element found at index $result.";
} else {
    echo "Element not found in the array.";
}
