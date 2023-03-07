<?php
    $valor = 7;
    $valor = dobra($valor);

    echo $valor;

    function dobra($valor){
        $valor *= 2;
        return $valor;
    }