<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format String dan Integer</title>
</head>
<body>
    
<?php
$jumlah = 100000000;
function rupiah($jumlah){
    // fromating integer
    return number_format($jumlah,0,",",".");
}
echo rupiah($jumlah);

$string = "hello world";
// change to upper
echo "\n";
echo strtoupper($string);
// change to lower
echo "\n";
echo strtolower($string);
echo "\n";
echo substr($string,1,4);
?>
</body>
</html>