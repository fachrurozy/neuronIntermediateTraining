<?php
include 'bukuHadir.php';

use fachrurrozy\lemari\lemari01\kotak02\bukuHadir as BukuHadir;
$fachrurrozy = new BukuHadir();
print_r($fachrurrozy->listKehadiran());
print_r($fachrurrozy->displayLaporanBulanan());
?>