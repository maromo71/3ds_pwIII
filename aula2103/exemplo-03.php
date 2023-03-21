<?php

    require_once("config.php");

    echo "Mostrando o numero da sessao no arquivo atual \n";
    echo session_id() . "\n";

    echo $_SESSION["nome"];