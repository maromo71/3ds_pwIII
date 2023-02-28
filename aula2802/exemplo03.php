<?php
    function converteMaiusculo($texto){
        return strtoupper($texto);
    }
    function deTrazParaFrente($texto){
        $res = " ";
        for($i=strlen($texto)-1; $i>=0; $i--){
            $res .= $texto[$i];
        }
        return $res;
    }
    $nome = "maromo";

    echo converteMaiusculo($nome);
    echo "<br>";
    echo deTrazParaFrente("Socorro");
    echo "<br>";
    echo strlen("maromo"); //tamanho em caracteres