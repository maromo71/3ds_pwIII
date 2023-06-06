<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect();

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), 
// mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";

// SQL para selecionar os registros
$sql = "SELECT id, name, email, gender, birthdate "
    . " FROM users ORDER BY name ASC";

// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sistema de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="row align-items-md-stretch">
        <div class="h-100 p-5 text-bg-dark">
            <h1>Sistema de Cadastro</h1>
            <h3>Manutenção de Usuário</h3>
            <a class="btn btn-primary" href="form-add.php">Adicionar Usuário</a>
        </div>
    </div>

    <div class="container">
        <h2>Lista de Usuários</h2>
        <p class="h-100 p-2 text-bg-dark rounded-3">Total de usuários: <?php echo $total ?></p>
    </div>
    <div class="container">
        <?php if ($total > 0) : ?>
            <table class="table " width="50%" border="1">
                <thead class="table-ligth">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Gênero</th>
                        <th>Data de Nascimento</th>
                        <th>Idade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= ($user['gender'] == 'm') ? 'Masculino' : 'Feminino' ?></td>
                            <td><?= dateConvert($user['birthdate']) ?></td>
                            <td><?= calculateAge($user['birthdate']) ?> anos</td>
                            <td>
                                <a class="btn btn-success" href="form-edit.php?id=<?= $user['id'] ?>">Editar</a>
                                <a class="btn btn-danger" href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">
                                    Remover
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>Nenhum usuário registrado</p>
        <?php endif; ?>
    </div>
    <footer class="p-3 text-bg-dark fixed-bottom text-center">
        Desenvolvido por Maromo&#174;
    </footer>
</body>

</html>