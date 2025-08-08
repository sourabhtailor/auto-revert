<?php
// Simple PHP Script

// Define a variable
$name = "World";

// Output a greeting
echo "<h1>Hello, $name!</h1>";

// Define an array
$fruits = ["Apple", "Banana", "Cherry"];

// Loop through the array
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";

// Simple function
function greet($person) {
    return "Hello, $person!";
}

// Call the function
echo "<p>" . greet("Visitor") . "</p>";
