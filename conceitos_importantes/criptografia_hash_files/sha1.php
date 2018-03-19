<?php

$string = 'uma string qualquer';

$codificada = sha1($string);

echo "Resultado usando sha1: " . $codificada;