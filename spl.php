<?php

$arquivoExperiencia = new SplFileObject('experiencias.csv');

while(!$arquivoExperiencia->eof())
{
    $linha = $arquivoExperiencia->fgetcsv(';') ;

    echo utf8_encode($linha[0]) . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoExperiencia->getCTime());
echo $date->format('d/m/Y');