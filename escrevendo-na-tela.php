<?php

$experiencias = fopen('zip://arquivos.zip#experiencias.txt', 'r');
stream_copy_to_stream($experiencias, STDOUT);