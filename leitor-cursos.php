<?php

// $arquivo = fopen('lista-cursos.txt', 'r');
// //Linha a Linha
// // while(!feof($arquivo)){
// //     $curso = fgets($arquivo);
// //     echo $curso;
// // }
// //LER O ARQUIVO TODO DE UMA VEZ
// // $tamanhoDoArquivo = filesize('lista-cursos.txt');
// // $cursos = fread($arquivo, $tamanhoDoArquivo);
// echo $cursos;
// fclose($arquivo);


$cursos = file('lista-cursos.txt');
var_dump($cursos);

