<?php

// Create an empty stack
$stack = [];

// Push elements onto the stack
array_push($stack, 1);
array_push($stack, 2);
array_push($stack, 3);

// Pop elements from the stack
$element = array_pop($stack); // Removes and returns 3
$element = array_pop($stack); // Removes and returns 2
$element = array_pop($stack); // Removes and returns 1

// Check if the stack is empty
if (empty($stack)) {
    echo "The stack is empty.";
} else {
    echo "The stack is not empty.";
}
