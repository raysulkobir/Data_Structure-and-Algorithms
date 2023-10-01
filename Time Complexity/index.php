<?php
 

//?  O(1): This denotes the constant time. 0(1) usually means that an algorithm will have constant time regardless of the input size. Hash Maps are perfect examples of constant time.

// Create an associative array (hash map)
$studentGrades = [
    "Alice" => 95,
    "Bob" => 87,
    "Charlie" => 92,
    "David" => 78,
    "Eve" => 89
];

// Access a value by key (constant time)
$aliceGrade = $studentGrades["Alice"];
echo "Alice's Grade: " . $aliceGrade . "\n";

// Add a new key-value pair (constant time)
$studentGrades["Frank"] = 91;

// Update an existing value (constant time)
$studentGrades["Charlie"] = 94;

// Remove a key-value pair (constant time)
unset($studentGrades["David"]);

// Check if a key exists (constant time)
if (isset($studentGrades["Eve"])) {
    echo "Eve's Grade is recorded.\n";
} else {
    echo "Eve's Grade is not recorded.\n";
}



//? O(n): This denotes linear time. O(n) means that the performance is directly proportional to the input size. In simple terms, the number of inputs and the time taken to execute those inputs will be proportional or the same. Linear search in arrays is the best example of linear time complexity.
// Sample array of numbers
$numbers = [10, 23, 7, 42, 15, 33, 55, 12];

// Target number we want to find
$target = 42;

// Linear search to find the target number
function linearSearch($array, $target)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $target) {
            return $i; // Target found, return its index
        }
    }
    return -1; // Target not found
}

// Perform the linear search
$result = linearSearch($numbers, $target);

if ($result != -1) {
    echo "Target $target found at index $result.\n";
} else {
    echo "Target $target not found in the array.\n";
}




//? O(n2): This denotes quadratic time. O(n2) means that the performance is directly proportional to the square of the input taken. In simple, the time taken for execution will take square times the input size. Nested loops are perfect examples of quadratic time complexity. in php

// Sample array of numbers
$numbers = [1, 2, 3, 4, 5];

// Function to find all pairs of elements (quadratic time complexity)
function findAllPairs($array)
{
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            echo "Pair: (" . $array[$i] . ", " . $array[$j] . ")\n";
        }
    }
}

// Perform the operation
findAllPairs($numbers);




//? O(log n): This denotes logarithmic time. O(log n) means to decrease with each instance for the operations. Binary search trees are the best examples of logarithmic time.

function binarySearch($array, $target)
{
    $left = 0;
    $right = count($array) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($array[$mid] === $target) {
            return $mid; // Target found
        } elseif ($array[$mid] < $target) {
            $left = $mid + 1; // Adjust the left boundary
        } else {
            $right = $mid - 1; // Adjust the right boundary
        }
    }

    return -1; // Target not found
}

$sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$target = 5;
$result = binarySearch($sortedArray, $target);

if ($result !== -1) {
    echo "Target $target found at index $result.\n";
} else {
    echo "Target $target not found in the array.\n";
}

