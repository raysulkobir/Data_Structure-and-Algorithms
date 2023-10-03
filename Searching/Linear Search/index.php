<?php

function linearSearch($array, $target) {
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == $target) {
            return $i; // Element found, return its index
        }
    }

    return -1; // Element not found
}

// Example usage:
$myArray = [10, 20, 30, 40, 50];
$targetElement = 30;
$result = linearSearch($myArray, $targetElement);

if ($result != -1) {
    echo "Element found at index: " . $result;
} else {
    echo "Element not found in the array.";
}
