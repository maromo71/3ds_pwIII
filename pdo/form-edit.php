<?php
require 'init.php';
// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
// valida o ID
if (empty($id)) {
    echo "ID para alteração não definido";
    exit;
}
// busca os dados do usuário a ser editado
$PDO = db_connect();
$sql = "SELECT name, email, gender, birthdate FROM users WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
// se o método fetch() não retornar um array, significa que o ID não corresponde 
// a um usuário válido
if (!is_array($user)) {
    echo "Nenhum usuário encontrado";
    exit;
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edição de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="row align-items-md-stretch">
        <div class="h-100 p-5 text-bg-dark">
            <h1>Sistema de Cadastro</h1>
            <h2>Edição de Usuário</h2>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-2"></div>
        <div class="col-8">
            <form class="form-control" action="edit.php" method="post">
                <label class="form-label" for="name">Nome: </label>

                <input class="form-control" type="text" name="name" id="name" value="<?= $user['name'] ?>">
                <label class="form-label" for="email">Email: </label>
                <input class="form-control" type="text" name="email" id="email" value="<?= $user['email'] ?>">
                Gênero:<br>
                <div class="form-control">
                    <input type="radio" name="gender" id="gender_m" value="m" <?php if ($user['gender'] == 'm') : ?> checked="checked" <?php endif; ?>>
                    <label class="form-label" for="gener_m">Masculino </label>
                    <input type="radio" name="gender" id="gender_f" value="f" <?php if ($user['gender'] == 'f') : ?> checked="checked" <?php endif; ?>>
                    <label class="form-label" for="gener_f">Feminino </label><br>
                </div>

                <label class="form-label" for="birthdate">Data de Nascimento: </label>
                <input class="form-control" type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY" value="<?php echo dateConvert($user['birthdate']) ?>">
                <input class="form-control" type="hidden" name="id" value="<?= $id ?>">
                <br>
                <input class="btn btn-primary" type="submit" value="Alterar">
            </form>
        </div>
        <div class="col-2"></div>
    </div>

    <footer class="p-3 text-bg-dark fixed-bottom text-center">
        Desenvolvido por Maromo&#174;
    </footer>
</body>

</html>