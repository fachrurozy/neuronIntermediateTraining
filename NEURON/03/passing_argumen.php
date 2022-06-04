<?php

function swapVariabel($param1, $param2){
    echo "Parameter 1 : $param1, Parameter 2 : $param2";

    // change value by reference
    $swap = $param1;
    $param1 = $param2;
    $param2 = $swap;

    echo "\n Parameter 1 : $param1, Parameter 2 : $param2";
}

echo swapVariabel(10,20);
?>