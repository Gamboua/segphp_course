<?php

if (!$conexao = ldap_connect("ldaps://auth.seg4linux.com.br/", 636)) {
    die('Não foi possível autenticar');
}

ldap_set_option($conexao, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($conexao, LDAP_OPT_REFERRALS, 0);

$dn = 'cn=admin,dc=treino,dc=org';
$senha = 'senhasecreta';

if (!ldap_bind($conexao, $dn, $senha)) {
    die('Usuário não autenticado!');
    ldap_close($conexao);
}

echo "Usuário autenticado!";

ldap_close($conexao);