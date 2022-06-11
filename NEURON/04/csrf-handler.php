<?php
session_start();

if(isset($_POST['csrf'])){
    if($_SESSION['csrf'] == $_POST['csrf']){
        $nomor_rekening = $_POST['nomor_rekening'];
        $jumlah_transfer = $_POST['jumlah_transfer'];
    
        echo "Nomor Rekening Tujuan: ". $nomor_rekening;
        echo "<br>";
        echo "Jumlah Transfer: ". $jumlah_transfer;
    }else{
        echo "Error, Session Tidak Sama";
    }
}else{
    echo "Error, csrf tidak terkirim";
}


?>