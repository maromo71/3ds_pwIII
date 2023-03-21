<?php
    session_start();

    $_SESSION["nome"] = "Etec Pedro Ferreira Alves";

    echo session_id() . "\n";
    
