<?php
$texto = file_get_contents('text.txt'); # Vai pegar o arquivo
$texto = explode('\n', $texto);

echo 'LINHAS: ' . count($texto);

echo '</br>';
# Escrever no arquivo de texto
$texto2 = 'Bruno Pires';
# file_put_contents vai fazer duas coisas, 1° Se não tiver o arquivo, ele vai criar. 2° Se o arquivo ja existir, ele vai substituir esse arquivo

file_put_contents('nome.txt', $texto2); # Dois parâmetros, 1°nome do arquivo. 2° conteúdo.
echo 'Arquivo criado com sucesso!';

echo '</br>';
echo '</br>';

$texto3 = file_get_contents('text_text.txt');
$texto3 .= "\nBrunao";
file_put_contents('text_text.txt', $texto3);
$result = file_get_contents('text_text.txt');
echo $result;
