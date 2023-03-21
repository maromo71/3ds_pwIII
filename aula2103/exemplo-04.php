<?php
    
    session_id('');
    
    require_once("config.php");

    session_regenerate_id();

    echo "Imprimindo a sessao gerada novamente (id) \n";

    echo session_id() . "\n";

    var_dump($_SESSION);