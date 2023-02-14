<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Código 04</title>
</head>
<body>
    <?php
        $escolha = 3;
    ?>
    <h1>Cardápio</h1>
    <h2>Bebidas</h2>
    <ul>
        <li>1. Coca-cola</li>
        <li>2. Fanta Uva</li>
        <li>3. Fanta</li>
        <li>4. Skol Lata </li>
    </ul>
    <h3>Sua opção foi: <?=$escolha?> </h3>
    <?php
        switch($escolha){
            case 1:
                $bebida = "coca-cola, preço 4,89";
                break;
            case 2:
                $bebida = "fanta uva, preço 3,78";
                break;
            case 3:
                $bebida = "fanta laranja, preço 3,89";
                break;
            case 4:
                $bebida = "Ah para, você é menor de idade";
                break;
            default:
                $bebida = "opção inválida";
        }
    ?>
</body>
</html>