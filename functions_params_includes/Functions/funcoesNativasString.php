<?php
$nomeSujo = '      Bruno         ';
$nomeLimpo = trim($nomeSujo);

echo 'NOME SUJO: '.strlen($nomeSujo)."<br/>";
echo 'NOME LIMPO: '.strlen($nomeLimpo)."<br/>";

$nome = 'Bruno Pires';

echo strtolower($nome); // Tudo minusculo
echo '<br/>';
echo strtoupper($nome); // Tudo maiusculo

echo '<br/>';

$nomeAlterado = str_replace('r', '3', $nome); // Modifica a string primeiro argumento = o que eu quero alterar, segundo argumento = vou substituir por, terceiro argumento = armazene nesta variavel;

echo $nomeAlterado;
echo '<br/>';

$nomeCompleto = 'Bruno Pires';

$substrNome = substr($nomeCompleto, -2, 5); // pegue a variavel tal e quero que comece da letra tal até a letra tal
echo $substrNome;
echo '<br/>';

$nomeCompleto2 = 'Bruno Pires';
$posicao = strpos($nomeCompleto2, 'Br'); // Estou procurando na variavel $nomeCompleto2 a posição da letra 'a'
if($posicao !== false) {
  echo 'Achou! Posição: '.$posicao;
} else {
  echo 'Não achou! 🥲';
}

echo '<br/>';
echo '<br/>';

$firstLetter = "bruno pires de siqueira";

echo ucfirst($firstLetter); //ucfirst Transforma a primeira letra em maiuscula;
echo '<br/>';
echo ucwords($firstLetter); // Transforma sempre a primeira letra em maiuscula e depois de um espaço também

$nomes = explode(' ', $firstLetter); // o primeiro parametro é onde você quer quebrar a palavra. O segundo parâmetro é a sua propria string
echo '<br/>';
print_r($nomes);
echo '<br/>';
$numerox = 12913.12;

echo 'R$ '.number_format($numerox, 2, ',', '.'); // 1 parametro é o proprio numero, segundo é a quantidade de decimais, terceiro simbolo correspondente aos decimais padrao brasileiro é virgula, quarto simbolo para milhares EX: o ponto '.';