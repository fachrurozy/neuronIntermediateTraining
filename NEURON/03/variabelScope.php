<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$name = "Fachrurrozy";

function localVariable(){
    $umur = 19; // local variables
    echo "Local variable umur = " . $umur;
}

function globalVariabel(){
    global $name; // global variable
    echo "\nGlobal variable Nama = " . $name;
}

function staticVariabel(){
    static $var1 = 1;
    $var2 = 1;

    $var1++;
    $var2++;

    echo "\nStatic Variabel Value = " . $var1;
    echo " Non Statis Variabel Value = " . $var2;
}

echo localVariable();
echo globalVariabel();
echo staticVariabel();
echo staticVariabel();
?>