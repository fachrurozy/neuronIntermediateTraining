<?php
$fruits = ['Manggo', 'Melon', 'Apple'];
$serialize = serialize($fruits);
echo $serialize;
echo "\n";
$unserialize = unserialize($serialize);
print_r($unserialize);
?>