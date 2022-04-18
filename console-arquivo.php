<?php

$teclado = fopen('php://stdin', 'r');

$novaExperiencia = fgets($teclado);

file_put_contents('experiencias.txt', "\n$novaExoeriencia", FILE_APPEND);