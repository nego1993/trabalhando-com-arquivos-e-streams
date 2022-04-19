<?php

$minhasExperiencias = file('experiencias.txt');
$outrasExperiencias = file('experiencias-adicionais.txt');

$arquivocsv = fopen('experiencias.csv', 'w');

foreach ($minhasExperiencias as $experiencia) {
    $linha = [trim(utf8_decode($experiencia)), 'Sim'];

    fputcsv($arquivocsv, $linha, ';');
}

foreach ($outrasExperiencias as $experiencia) {
    $linha = [trim(utf8_decode($experiencia)), 'Nao'];

    fputcsv($arquivocsv, $linha, ';');
}

fclose($arquivocsv);