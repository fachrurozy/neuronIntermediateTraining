<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

class Process{

    function returnInteger():int{
        return 10;
    }

    function returnArray():array{
        return ['one', 'two', 'three'];
    }

    function returnString():string{
        return 'Some string';
    }

    function returnBoolean():bool{
        return true;
    }
}

$integer = new Process();
echo $integer->returnInteger();

$array = new Process();
echo "\n";
$list = $array->returnArray();
echo implode( ", ", $list );

$string = new Process();
echo "\n";
echo $string->returnString();

$boolean = new Process();
echo "\n";
echo $boolean->returnBoolean();
?>