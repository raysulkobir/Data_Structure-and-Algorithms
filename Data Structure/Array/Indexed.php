<?php

// Creating an indexed array
$colors = array("red", "green", "blue");
// Accessing elements
echo $colors[0]; // Outputs: red
echo $colors[1]; // Outputs: green

// Modifying elements
$colors[1] = "yellow"; // Update the second element

// Adding elements
$colors[] = "purple"; // Adds "purple" to the end of the array
// print_r($colors);

// Looping through the array
foreach ($colors as $color) {
    echo $color . "\n";
}
// Outputs: red yellow blue purple