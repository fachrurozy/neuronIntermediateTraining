<?php
trait Crud{
    function create(){
        return 'Create action';
    }
}

trait Autentifikasi{
    function cekLogin(){
        return 'Cek Login Action';
    }
}

class Barang{
    use Crud;
    use Autentifikasi;
}

$barang = new Barang();
echo $barang->create();
echo "\n";
echo $barang->cekLogin();
?>