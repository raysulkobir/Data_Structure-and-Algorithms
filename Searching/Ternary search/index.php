<?php

function ternarySearch($arr, $left, $right, $x)
{
    if ($right >= $left) {
        $mid1 = $left + ($right - $left) / 3;
        $mid2 = $right - ($right - $left) / 3;

        // Check if the element is present at the mid1 or mid2 position
        if ($arr[$mid1] == $x) {
            return $mid1;
        }
        if ($arr[$mid2] == $x) {
            return $mid2;
        }

        // Recursively search in the remaining segments
        if ($x < $arr[$mid1]) {
            return ternarySearch($arr, $left, $mid1 - 1, $x);
        } elseif ($x > $arr[$mid2]) {
            return ternarySearch($arr, $mid2 + 1, $right, $x);
        } else {
            return ternarySearch($arr, $mid1 + 1, $mid2 - 1, $x);
        }
    }

    // Element not found in the array
    return -1;
}

// Example usage:
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$x = 5;
$result = ternarySearch($arr, 0, count($arr) - 1, $x);

if ($result != -1) {
    echo "Element found at index " . $result;
} else {
    echo "Element not found in the array";
}