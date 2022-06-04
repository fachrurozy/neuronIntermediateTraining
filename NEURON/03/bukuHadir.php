<?php
namespace fachrurrozy\lemari\lemari01\kotak02;

include 'laporanBulanan.php';

use fachrurrozy;

class BukuHadir{

    function listKehadiran(){
        $kehadiran = [
            ['tanggal'=>'2022-06-03','Status Kehadiran'=>'Hadir'],
            ['tanggal'=>'2022-06-04','Status Kehadiran'=>'Hadir']
        ];

        return $kehadiran;
    }

    function displayLaporanBulanan(){
        $objLaporan = new \fachrurrozy\LaporanBulanan;
        return $objLaporan->getLaporanBulanan();
    }
}
?>