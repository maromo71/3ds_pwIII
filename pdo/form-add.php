<?php
require 'init.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="row align-items-md-stretch">
        <div class="h-100 p-5 text-bg-dark">
            <h1>Sistema de Cadastro</h1>
            <h2>Cadastro de Usuário</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="container m-3">
                <form class="form-control" action="add.php" method="post">
                    <label class="form-label" for="name">Nome: </label>
                    <input class="form-control" type="text" name="name" id="name">
                    <label class="form-label" for="email">Email: </label>
                    <input class="form-control" type="text" name="email" id="email">
                    Gênero:<br>
                    <input type="radio" name="gender" id="gender_m" value="m">
                    <label for="gener_m">Masculino </label>
                    <input type="radio" name="gender" id="gender_f" value="f">
                    <label for="gener_f">Feminino </label>
                    <br>
                    <label class="form-label" for="birthdate">Data de Nascimento: </label>
                    <br>
                    <input class="form-control" type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY">
                    <br>    
                    <input class="btn btn-success" type="submit" value="Cadastrar">
            </div>
        </div>
        <div class="col-3"></div>
    </div>

    <footer class="p-3 text-bg-dark fixed-bottom text-center">
        Desenvolvido por Maromo&#174;
    </footer>
</body>

</html>