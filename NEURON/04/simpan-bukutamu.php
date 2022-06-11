<?php
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
echo $komentar;
echo "\n";
echo strip_tags($komentar);
?>