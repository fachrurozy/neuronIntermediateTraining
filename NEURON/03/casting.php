<?php
$var1 = 19; // type integer
$var2 = "Jumlah peserta 18"; // type string
$nilai = 18.5; // type decimal
$boolean = true; // type boolean
$string2 = "14.5"; // type string

echo gettype($string2);
echo "\n";
echo gettype($nilai);
echo "\n";

echo (integer)$nilai; // casting from decimal to integer
echo "\n";
echo (double)$var1; // casting from integer to decimal
echo "\n";
echo (integer)$var2; // casting from string to integer
echo "\n";
echo $boolean; // casting from boolean to integer
echo "\n";
echo (float)$string2; // casting from string to float
?>