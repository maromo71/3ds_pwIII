<?php
    include_once("professor.php");
    $sinzomar = new Professor();
    $sinzomar->nome = "Professor Sinzomar";
    $sinzomar->registro = 234;

    //50 questoes na prova
    echo $sinzomar->aplicar_prova(50);
    //paramos no slide 24 do material 04.