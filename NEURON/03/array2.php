<?php
$kendaraan = ['Motor', 'Mobil ','Sepeda '];
$kendaraan2 = ['Kijang', 'Suzuka'];

// Menggabungkan Array
$mergeArray = array_merge($kendaraan,$kendaraan2);
print_r($mergeArray);

// Mencari value pada sebuah array
if(in_array('Motor', $kendaraan)){
    echo "Ada";
}else{
    echo "Tidak Ada";
}

// Mencari beberapa data pada sebuah array
if(array_intersect(['Motor','Mobil'], $kendaraan)){
    echo "\nAda Kendaraan";
}else{
    echo "\nTidak Ada Kendaraan";
}

// mencari key ada sebuahn asosiatif array
$smartphone = ['ram' => '4GB', 'OS' => 'Android 10'];
if(key_exists('ram',$smartphone)){
    echo "\nKey Ram Ditemukan";
}
?>