<?php

// $arquivo = fopen('cursos-php.txt', 'a');
// $curso = "\nCna?";
// fwrite($arquivo, $curso);
// fclose($arquivo);

$curso = "\nfopen — Abre um arquivo ou URL";
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);