<?php
    function operar($x, $y, $sinal){
        switch($sinal){
            case '+':
                return $x + $y;
                break;
            case '-':
                return $x - $y;
                break;
            default:
                echo "Sinal errado <br>";
        }
    }
    $num1 = 10;
    $num2 = 5;

    $resultado = operar($num1, $num2, '+');
    echo $resultado;