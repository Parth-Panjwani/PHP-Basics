<?php
/*
Loops are used to execute the same block of code again and again, as long as a certain condition is true.

*/

/*
In PHP, we have the following loop types:
*/

$varFrom = 10;
$varWhile = 0;
$varDoWhile = 1;

// === While ===
// while - loops through a block of code as long as the specified condition is true 
while ($varWhile <= $varFrom) {
    echo "Number While $varWhile \n";
    $varWhile++;
}

// === do While ===
// do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true 

do {
    echo "Number Do While $varDoWhile \n";
    $varDoWhile++;
} while ($varDoWhile <= $varFrom);

// === For Loop ===
// The for loop is used when you know in advance how many times the script should run.


for ($varFor = 0; $varFor < $varFrom; $varFor++) {
    echo "Number For $varFor \n ";
}

// === ForEach ===
// Loops through a block of code for each element in an array.

$varArray = [
    "Dog", "Cat", "Cow", "Sheep"
];
$varArray2 = [
    "Eva" => "32",
    "Fitri" => "27",
    "Adrian" => "20",
];

foreach ($varArray as $pet) {
    echo "I have pet, namely $pet \n";
}

foreach ($varArray2 as $name => $age) {
    echo "$name, age $age \n";
}

// === Break and Continue
// == Break ==
// The break statement can also be used to jump out of a loop.

for ($varBreak = 0; $varBreak < 10; $varBreak++) {
    if ($varBreak == 4) {
        break;
    }
    echo "The number is: $varBreak \n";
}

// == Continue ==
// The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x \n";
}
