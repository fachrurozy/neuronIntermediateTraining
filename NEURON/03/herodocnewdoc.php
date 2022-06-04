<?php
$pesanKonfirmasi = "Selamat, Fachrurrozy
Anda Berhak Mendapatkan Hadiah Mobil Minicooper\n";
echo $pesanKonfirmasi;

$name = "fachrurrozy";
// Heredoc
$pesan = <<<TEXT
Selamat, $name
Anda Berhak Mendapatkan Hadiah Mobil Minicooper
Silahkan Hubungi Admin
TEXT;
echo $pesan;

// Nowdoc
$pesan = <<<'TEXT'
Selamat, $name
Anda Berhak Mendapatkan Hadiah Mobil Minicooper
Silahkan Hubungi Admin
TEXT;
echo $pesan;
?>