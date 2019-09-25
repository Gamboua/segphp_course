<?php

if ($_POST) {
    $user = 'admin';
    $passwd = 'admin';

    if ($_GET['login'] == $user && $_GET['passwd'] == $passwd) {
        header('Location: csrf_vitima.php');
    } else {
        echo 'Usuario e senha nao coincidem';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Login: <input type="text" name="login" /> </td>
                <td>Senha: <input type="password" name="passwd" /> </td>
            </tr>
        </table>
        <button type="submit">Acessar<button>
    </form>
</body>
</html>
