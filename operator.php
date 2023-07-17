<?php

$var1 = 30;
$var2 = 20;

// === Aricmatic Operators ===

// Addition / Penambahan
echo "$var1 + $var2 = " . $var1 + $var2 . "\n"; // output 50
// Subtraction / Pengurangan
echo "$var1 - $var2 = " . $var1 - $var2 . "\n"; // output 10
// multiplication / Perkalian
echo "$var1 * $var2 = " . $var1 * $var2 . "\n"; // output 600
// Division / Pembagian
echo "$var1 / $var2 = " . $var1 / $var2 . "\n"; // output 1.5
// Modulus
echo "$var1 % $var2 = " . $var1 % $var2 . "\n"; // output 10
// Exponentiation
echo "$var1 ** $var2 = " . $var1 ** $var2 . "\n"; // output 3.486784401E+29

// === Assignment Operators / Penugasan Operator ===
$var3 = $var1;

echo "$var3 = $var1 \n";

// Addition / Penambahan
echo "$var3 + $var2 = " . $var3 += $var2 . "\n"; // output 50, same as $var3 = $var3 + $var20
// Subtraction / Pengurangan
echo "$var3 - $var2 = " . $var3 -= $var2 . "\n"; // output 10, same as $var3 = $var3 - $var20
// multiplication / Perkalian
echo "$var3 * $var2 = " . $var3 *= $var2 . "\n"; // output 600, same as $var3 = $var3 * $var20
// Division / Pembagian
echo "$var3 / $var2 = " . $var3 /= $var2 . "\n"; // output 1.5, same as $var3 = $var3 / $var20
// Modulus
echo "$var3 % $var2 = " . $var3 %= $var2 . "\n"; // output 10, same as $var3 = $var3 % $var20

// === Comparison Operators 
$var4 = 100;
$var5 = "100";
// Equal 
var_dump($var4 == $var5); //-> output bool(true)
// Not Equal
var_dump($var4 != $var5); //-> output bool(false)... example 1
var_dump($var4 <> $var5); //-> output bool(false) example 2
// Identical
var_dump($var4 === $var5); //-> output bool(false)
// Not Identical 
var_dump($var4 !== $var5); //-> output bool(true)
// Greater than 
var_dump($var1 > $var2); //-> output bool(true)
// Less than 
var_dump($var1 < $var2); //-> output bool(false)
// Greater than or equal to 
var_dump($var1 >= $var3); //-> output bool(true)
// Less than or equal to 
var_dump($var3 <= $var1); //-> output bool(true)
// Spaceship
/*
Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
*/
$var6 = 5;
$var7 = 10;

echo ($var6 <=> $var7); // returns -1 because $var6 is less than $var7

$var6 = 10;
$var7 = 10;

echo ($var6 <=> $var7); // returns 0 because values are equal

$var6 = 15;
$var7 = 10;

echo ($var6 <=> $var7); // returns +1 because $var6 is greater than $var7