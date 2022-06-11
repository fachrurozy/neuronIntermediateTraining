<?php
// adalah sebuah class yang abstrak method tidak diimplementasikan pada class itu sendiri
abstract class Car{
    abstract public function turnOnMachine($merk):string;
}

Class Audi extends Car{
    function turnOnMachine($merk):string{
        return 'Turn On Machine Car '.$merk;
    }
}

$audi = new Audi();
echo $audi->turnOnMachine('Audi');
?>