<?php

// $texto = file_get_contents('texto.txt');
// $texto = explode('\n', $texto);

// echo 'PARAGRAFOS: '.count($texto);

# ESCREVER EM ARQUIVOS EXTERNOS
// $texto = 'Bruno Siqueira';

// file_put_contents('nome.txt', $texto);


# PRESERVANDO O CONTEUDO INICIAL DO ARQUIVO E ADICIONANDO ALGO A MAIS
$texto = file_get_contents('texto.txt');
$texto .= 'Bruno Siqueira ';

file_put_contents('texto.txt', $texto);

