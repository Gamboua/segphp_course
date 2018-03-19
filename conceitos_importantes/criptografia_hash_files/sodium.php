<?php
# Fonte: https://pt.stackoverflow.com/a/239745
# FULANO 1 GERANDO A MENSAGEM

$BobPK = pack('H*', 'd8b91792ce11783fa4b32bfcb3f636c3785d0589e35a2b3b30aec5019c690d61');

$TextoCifrado = sodium_crypto_box_seal(
    'Um texto bacana, mas anonimo',
    $BobPK
);

echo $Resultado = base64_encode($TextoCifrado); 
// bgSXKQmj4nc0JYtYYk1rsp6P/OuCqv1ThdRJCokoQBkMY8N57C0gCiVQLT/dkOu0mFVgNc+c1OXJa6nZcFoP6YzGHH6LZRzRLrTPTg==

# BOB LENDO A MENSAGEM

$BobPK = pack('H*', 'd8b91792ce11783fa4b32bfcb3f636c3785d0589e35a2b3b30aec5019c690d61');
$BobSK = pack('H*', '3b505365150b8f42014416ecffa546ef4e6196d69d8c4a1782458ebb3117776e');

// Cria par de chaves entre Bob e Bob (sim, ele e ele mesmo):
$BobKP = sodium_crypto_box_keypair_from_secretkey_and_publickey(
    $BobSK,
    $BobPK
);

$TextoClaro = sodium_crypto_box_seal_open(
    base64_decode($Resultado),
    $BobKP
);

echo $TextoClaro;