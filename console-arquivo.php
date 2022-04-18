<?php

$teclado = fopen('php://stdin', 'r');

$novaExperiencia = trim(fgets(STDIN));

file_put_contents('experiencias.txt', "\n$novaExperiencia", FILE_APPEND);