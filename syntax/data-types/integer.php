<?php
/**
 * Basic PHP Integer Type and Basic Arithmetic
 * An integer is a whole number (no decimal point).
 * Range: -2,147,483,648 to 2,147,483,647 (on 32-bit systems).
 */

// Declaration of integer variables
$a = 1;
$b = 2;

// Addition of two integers
$c = $a + $b;

// Output values
echo "a: " . $a . "\n";
echo "b: " . $b . "\n";
echo "sum: " . $c . "\n";

// Check the type of result
var_dump($c);

// =============================================
// More examples of integer operations
// =============================================

// Subtraction
$d = $b - $a;  // 2 - 1 = 1
echo "b - a = " . $d . "\n";

// Multiplication
$e = $a * $b;  // 1 * 2 = 2
echo "a * b = " . $e . "\n";

// Division (result may NOT be integer!)
$f = 10 / 2;  // This is 5 → actually a float in PHP!
$g = 10 / 3;  // This is ~3.333... → float

echo "10 / 2 = ";
var_dump($f);  // float(5)
echo "10 / 3 = ";
var_dump($g);  // float(3.333...)

// Modulus — remainder after division (always integer if inputs are int)
$h = 10 % 3;  // 10 / 3 = 3 with the remainder 1
echo "10 % 3 = " . $h . " (remainder)\n";

// Exponentiation
$i = 2 ** 3;  // 2 to the power of 3 = 8
echo "2 ** 3 = " . $i . "\n";

// =============================================
// Different ways to write integers
// =============================================

$decimal = 123;     // Base 10
$hex = 0x1A;    // Base 16 (hex) → 26
$octal = 0123;    // Base 8 (octal) → 83
$binary = 0b1111;  // Base 2 (binary) → 15

echo "Hex 0x1A = $hex\n";
echo "Octal 0123 = $octal\n";
echo "Binary 0b1111 = $binary\n";

// Confirm they are integers
var_dump($decimal, $hex, $octal, $binary);

// Important: Division in PHP returns float!

$j = 15;
$k = 4;
$div_result = $j / $k;  // 3.75 → float, not int!

echo "15 / 4 = ";
var_dump($div_result);

// To force an integer result, cast it:
$int_result = (int)($j / $k);  // 3 (fractional part is truncated)

echo "Integer part of 15 / 4 = $int_result\n";
