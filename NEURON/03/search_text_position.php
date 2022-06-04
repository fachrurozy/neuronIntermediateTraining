<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Posisi Karakter Di Dalam Kalimat</title>
</head>
<body>
    <?php
    $string = "Anda Beruntung memenangkan pertandingan ini";
    $searchKeyWord = "Beruntung";
    $hasil = strpos($string,$searchKeyWord);
    $hasilAkhir = $hasil +1;
    echo $searchKeyWord . " Berada pada posisi karakter ke " . $hasilAkhir;
    ?>
</body>
</html>