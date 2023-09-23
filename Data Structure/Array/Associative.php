<?php

// Creating an associative array
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
);

// Accessing elements
// echo $person["first_name"]; // Outputs: John
// echo $person["last_name"];  // Outputs: Doe

// Modifying elements
$person["age"] = 35; // Update the age

// Adding elements
$person["email"] = "john@example.com"; // Add an email key

// Looping through the array
foreach ($person as $key => $value) {
    echo $key . ": " . $value . " \n";
}
// Outputs: first_name: John last_name: Doe age: 35 email: john@example.com
