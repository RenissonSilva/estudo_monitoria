<?php 
include_once 'init.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $dados = file('dados.csv');
        for ($i = 0; $i < sizeof($dados); $i++) {
            $dados[$i] = explode(',', $dados[$i]);
        }
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Nota</th>
            <th>Ação</th>
        </tr>

        <?php foreach ($dados as $id => $dado): ?>
            <tr>
                <td><?= $dado[0] ?></td>
                <td><?= $dado[1] ?></td>
                <td>
                    <a href="delete.php?id=<?= $id ?>">Remover</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php if(logado()): ?>
        <form action="atualizar.php" method="POST">
            Nome: <input type="text" name="nome">
            <br>
            Nota: <input type="text" name="nota">
            <br>
            <input type="submit">
        </form>
    <?php endif ?>

    <?php if(!logado()): ?>
        <a href="reg-login.php">Cadastrar</a>
        <a href="reg-login.php">Entrar</a>
        <?php else: ?>
        <a href="logout.php">Sair</a>    
    <?php endif ?>
</body>
</html>