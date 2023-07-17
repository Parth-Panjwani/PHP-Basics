<?php
// this I will learn about String further 

// \n function to create a new line in the terminal

// strlen() function returns the length of a string. 
echo strlen("Adrian Miftahul haq") . "\n"; // -> Output 19

// str_word_count() function counts the number of words in a string.
echo str_word_count("Adrian Miftahul haq") . "\n"; // -> Output 3

// strrev() function reverses a string. 
echo strrev("Adrian :)") . "\n"; // -> Outputs ): nairdA

// strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE. 
echo strpos("Adrian Miftahul Haq", "Miftahul") . "\n"; // outputs 7

// str_replace() function replaces some characters with some other characters in a string. /

echo str_replace("Janah", "Miftahul", "Adrian Janah"); // -> Outputs Adrian Miftahul
