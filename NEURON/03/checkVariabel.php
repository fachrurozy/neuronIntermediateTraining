<?php
$var1 = 10;

if(isset($var1)){
    echo "True";
}else{
    echo "False";
}
// will return true because $var1 is exist

$tanggal_awal;
$tanggal_akhir;

if($tanggal_awal != ''){
    // your code here
}

if(!empty($tanggal_awal)){
    echo "Tanggal Memiliki Value";
}else{
    echo "Tanggal Tidak Memiliki Value";
}
?>