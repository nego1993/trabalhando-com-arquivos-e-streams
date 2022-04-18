<?php

require 'MeuFiltro.php';

$arquivoExperiencia = fopen('experiencias.txt', 'r');

stream_filter_register('julio.usinagem', MeuFiltro::class);

stream_filter_append($arquivoExperiencia, 'julio.usinagem');

echo fread($arquivoExperiencia, filesize('experiencias.txt'));

