<?php
$kendaraan = ['Motor ', 'Mobil ','Sepeda '];
// Menghitung jumlah item pada sebuah array
echo "Jumlah Item Pada Array Kendaraan Adalah : ".count($kendaraan);
// Menampilkan semu item pada array
print_r($kendaraan);
$removeSpaceArray = array_map('trim', $kendaraan);
print_r($removeSpaceArray);

$upperArray = array_map('strtoupper', $kendaraan);
print_r($upperArray);

$rangeGaji = [4000000,5000000,10000000];
function rupiah($jumlah) {
    return number_format($jumlah,0,",",".");
}

print_r(array_map('rupiah',$rangeGaji));
?>