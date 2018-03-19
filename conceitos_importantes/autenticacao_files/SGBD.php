<?php

############## MYSQLI

$mysqli = new mysqli("hostname", "usuario", "senha", "dbname");

$query = "SELECT * FROM usuario WHERE nome = ? ";

$statement = $mysqli->prepare($query);
$statement->bind_param("s", $nome);
$statement->execute();

$result = $statement->get_result();
$rows = $result->fetch_assoc();

print_r($rows);

############## PDO

$pdo = new PDO('mysql:host=hostname;dbname=dbname', 'usuario', 'senha');

$query = "SELECT * FROM usuario WHERE nome=:nome";

$statement = $pdo->prepare($query);
$statement->bindValue(":nome",$nome);
$statement->execute();

$rows = $stm->fetch(\PDO::FETCH_ASSOC);

return $rows;