<?php

if (!$conexao = kadm5_init_with_password('auth.seg4linux', 'TREINO.ORG', 'admin/admin', 'senhasecreta')) {
    die('Usuário não autenticado!');
}

echo "Usuário autenticado";

kadm5_destroy($conexao);