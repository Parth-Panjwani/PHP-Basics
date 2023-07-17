<?php
// Explanation in English = 
/* Contants  is an identifier (name) for a simple value. THE VALUE CANNOT BE CHANGED during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Note: Unlike variables, constants are automatically global across the entire script. */

// === Create a Contant in PHP ===
// define(name, value, case-insensitive)

/*
    name: Specifies the name of the constant
    value: Specifies the value of the constant
    case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
*/

// === Example ===
define("GREETING", "this is value");
echo GREETING . "\n";

// === Example use Arrays ===
define("NAMES", [
    "Adrian",
    "Dinda",
    "Tiara"
]);
echo NAMES[0] . "\n";

// === Example use Function ===
define("CONT_FUNC", "This Const used Function");

function constFunc()
{
    echo CONT_FUNC;
}
constFunc();
