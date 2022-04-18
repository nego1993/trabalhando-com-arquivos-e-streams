<?php

$arquivo = fopen('experiencias.txt', 'r');

while (!feof($arquivo)) {
    $experiencias = fgets($arquivo);

    echo $experiencias;
}

fclose($arquivo);