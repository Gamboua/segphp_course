<?php

session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: csrf_vitima_login.php');
}

?>

<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <td>id</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Deletar</td>
            </tr>
            <?php
                foreach (rand(1, 5) as $i) :
            ?>

                    <tr>
                        <td><?= $i ?></td>
                        <td>Fulano<?= $i ?></td>
                        <td>fulano<?= $i ?>@fulano.com.br</td>
                        <td><a href="csrf_vitima_del.php?id=<?= $i ?>">X</a></td>
                    </tr>

            <?php
                endforeach;
            ?>
        </table>
    </body>
</html>