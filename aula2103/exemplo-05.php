<?php

    require_once("Config.php");

    echo session_save_path();

    echo "\n";

    var_dump(session_status());

    echo "\n";

    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "sessoes desabilitadas \n";
            break;
        case PHP_SESSION_NONE:
            echo "sessoes habilitadas, mas nao existe nenhuma\n";
            break;
        case PHP_SESSION_ACTIVE:
            echo "sessoes habilitadas, e uma existente\n";
    }