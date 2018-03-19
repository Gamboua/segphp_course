<?php

session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: csrf_vitima_login.php');
}

if (isset($_GET['id'])) {
    echo "Fulano {$_GET['id']} deletado com sucesso!";
}

?>

<a href="csrf_vitima.php">>>> Voltar <<<</a>