<?php

$string = 'uma string qualquer';

$codificada = md5($string);

echo "Resultado usando md5: " . $codificada;