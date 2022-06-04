<?php
$kendaraan = ['Motor', 'Mobil','Sepeda'];
asort($kendaraan);
print_r($kendaraan);

rsort($kendaraan);
print_r($kendaraan);

$string = "Hello World";
$slug = explode(" ",$string);
print_r($slug);
?>