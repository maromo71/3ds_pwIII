<?php
    //Exemplo de código com função
    $num = 10;

    function fazAlgo(){
        global $num;
        $num = $num * 100;
        echo "$num <br>";
    }

    $num+= 10;
    echo "Valor de num = $num <br>";
    fazAlgo();
    echo  "num fora da funcao vale: $num <br>";