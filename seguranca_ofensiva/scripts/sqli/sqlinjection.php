<?php

# login=' or '1'='1
# senha=' or '1'='1

if ($_POST) {
    $query = "SELECT * FROM usuarios WHERE user='$user' AND pass='$pass' ";

    echo $query;
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
    </form>
</body>
</html>