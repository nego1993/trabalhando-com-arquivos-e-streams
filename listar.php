<?php

$arquivo = fopen('experiencias.txt', 'r');
{
    $tamanhoArquivo = filesize('experiencias.txt') ;
    $experiencias = fread($arquivo, $tamanhoArquivo);

    echo $experiencias;
}

fclose($arquivo);