<?php

// Variables can store data of different types, and different data types can do different things.
// PHP supports the following data types:
// String, Integer, Float (floating point numbers - also called double), Boolean, Array, Object, NULL, Resource

// PHP string
// A string is a sequence of characters, like "Hello world!".
// A string can be any text inside quotes. You can use single or double quotes:

$string = "Hello world!";  // Double quotes - allows variable interpolation and escape sequences
$string2 = 'Hello world!'; // Single quotes - literal string, no special processing

var_dump($string);
var_dump($string2);

// Output:
// string(12) "Hello world!"
// string(12) "Hello world!"

// Why the same output when using var_dump()?
// 1. Both strings contain exactly the same characters
// 2. The length is the same (12 characters including space and !)
// 3. var_dump() shows the final content, not how it was created

// The difference would appear if we used:
// - Variables inside: "Hello $name" vs 'Hello $name'
// - Escape sequences: "Hello\nWorld" vs 'Hello\nWorld'
// - But in this simple case, they're identical

$first_name = 'John';
$second_name = 'Joe';

var_dump($first_name);
var_dump($second_name);
// The difference appears when using:
$name = "John";
echo "Hello $name" . "\n"; // "Hello John" - variable interpolation
echo 'Hello $name'; // "Hello $name" - no interpolation

// Output:
//string(4) "John"
//string(3) "Joe"
//Hello John -- variable interpolation
//Hello $name% -- no interpolation
