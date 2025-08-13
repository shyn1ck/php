<?php

//A variable starts with the $ sign, followed by the name of the variable
//A variable name must start with a letter or the underscore character
//A variable name cannot start with a number
//A variable name can only contain alphanumeric characters and underscores (A-z, 0-9, and _)
//Variable names are case-sensitive ($age and $AGE are two different variables)


$name = "shyn1ck";                          // string
$age = 21;                                  // integer
$weight = 96.5;                             // float
$is_married = true;                         // boolean
$car = null;                                // null
$hobbies = ["music", "coding", "gaming"];   // array


echo "nickname: " . $name . "\n";                                   // In php for echoing a variable we use the '.' operator
echo "age: " . $age . "\n";
echo "weight: " . $weight . "\n";
echo "is married: " . ($is_married ? "true" : "false") . "\n";      // In php for checking a boolean value we use the '?' operator
echo "car: " . $car . "\n";
echo "hobbies: " . implode(", ", $hobbies) . "\n \n";       // implode function for joining array elements with a string

var_dump($name, $age, $weight, $is_married, $car, $hobbies);

// Operator '?' is called ternary operator
// It is used to assign a value to a variable based on a condition

// Operator '.' is called concatenation operator
// It is used to join two or more strings

// Operator 'implode' is called array function
// It is used to join array elements with a string

// Operator 'var_dump' is called debug function
// It is used to display the value and type of a variable

