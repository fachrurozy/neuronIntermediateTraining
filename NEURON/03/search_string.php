<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Kata Dalam Kalimat Dengan PHP</title>
</head>
<body>
<?php
    $string = "Terima Kasih saudara, selamat anda sudah menyelesaikan training ini";
    $keyword = "selamat";

    if(preg_match("/$keyword/i",$string)){
        echo "Kata : ".$keyword." Ketemu";
    }else{
        echo "Kata : ".$keyword." Tidak Ketemu";
    }
?>
</body>
</html>