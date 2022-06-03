<?php
$topiSaya = "bundar";

// logical to check condition
if($topiSaya !='bundar'){
    echo "Bukan Topi Saya";
}else{
    echo "Topi Saya";
}
echo "\n";
// ternary operator
echo $topiSaya=='bundar'?"Topi Saya":"Bukan Topi Saya";
echo "\n";
$nilai = 50;

echo ($nilai>=90)?'Bagus':($nilai>=80?'Bagus':($nilai>=70?'Biasa':"jelek"));
?>