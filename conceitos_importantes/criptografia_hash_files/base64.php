<?php

$string = 'uma string qualquer';

$codificada = base64_encode($string);

echo "Resultado usando base64: " . $codificada;

echo "<hr>";

$original = base64_decode($codificada);

echo "Resultado decodificado usando base64: " . $original;