<?php
    $nome = "Ricardo";
    $salario = 1867.89;
    $percentual = readline('Digite a porcentagem: ');
    $percentual /= 100;
    $aumento = $salario * $percentual;
    $novo_salario = $salario + $aumento;
    echo "$nome seu aumento é de $aumento \n";
    echo "Salario novo: R$ $novo_salario \n";
    
