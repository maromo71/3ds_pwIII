<?php
    //Menu de produtos
    $cardapio = "MENU DE PRODUTOS \n";
    $cardapio .= "1. Coca-cola \n";
    $cardapio .= "2. Fanta \n";
    $cardapio .= "3. Salgado Frito \n";
    $cardapio .= "Escolha sua opção: \n";
    $opcao = readline("$cardapio");
    switch($opcao){
        case 1:
            echo "Coca-cola valor R$ 5,00 \n";
            break;
        case 2:
            echo "Fanta valor R$ 4,89 \n";
            break;
        case 3:
            echo "Salgado R$ 6,00 \n";
            break;
        default:
            echo "Opção inválida \n";
    }