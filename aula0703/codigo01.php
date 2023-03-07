<?php
    include_once("utilitarios.php");
    $tempo = time();
    $data = getdate($tempo);
    echo "hoje é " . dia_da_semana($data) . "\n";
    
    