<?php

//  === Numbers === 
/* Here is role for integer 
    1. An integer must have at least one digit 
    2. An integer must NOT have a decimal point .
    3. An integer can be either positive or negative 
    4. Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
*/

// PHP has the following predefined constants for integers:
// PHP_INT_MAX - The largest integer supported 
// PHP_INT_MIN - The smallest integer supported 
// PHP_INT_SIZE -  The size of an integer in bytes 

// Example
$thisInt = 123;
$notInt = 123.12;

echo "Ini sebuah Sebuah Integer = $thisInt \n";
echo "Ini bukan sebuah Sebuah Integer = $notInt \n";

// === Float ===
$thisFloat = 10.365;
echo "Ini bukan sebuah Sebuah Float = $thisFloat \n";

// Infintiy Number
$infinity = 1.9e411;
var_dump($infinity); // -> outputs float(INF)

// === NaN ===
/*
    NaN stands for Not a Number 

    NaN is used for impossible mathematical operations 

    PHP has the following functions to check if a value is not a number:
    is_nan()
*/

$thisNaN = acos(8);
var_dump($thisNaN); // -> output float(NaN)

// === is_numeric
// is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise

// example
$example1 = 5985;
var_dump(is_numeric($example1)); // -> output bool(true)

$example2 = "5985";
var_dump(is_numeric($example2)); // -> output bool(true)

$example3 = "59.85" + 100;
var_dump(is_numeric($example3)); // -> output bool(true)

$example4 = "Hello";
var_dump(is_numeric($example4)); // -> output bool(false)

// === Convert to Int ===
// Float to Int
$beginningFloat = 1234.12;
$floatToInt = (int)$beginningFloat;

echo $floatToInt . "\n"; // -> Output 1234

// Float to Int
$beginningString = '123412';
$stringToInt = (int)$beginningString;

echo $stringToInt; // -> Output 1234
