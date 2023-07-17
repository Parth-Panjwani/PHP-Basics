<?php
// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

$var1 = 75;
$var2 = 25;
// $_GLOBALS 

function addition()
{
    $GLOBALS['var2'] = $GLOBALS['var2'] + $GLOBALS['var1'];
}

addition();
echo $var2 . "\n";

// $_SERVER
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

echo $_SERVER['PHP_SELF'];
// === other ===
/*
    https://www.w3schools.com/php/php_superglobals_server.asp
*/
