<?php

$numeros = [1, 2, 3, 4, 5];

# vai pegar o array que voce mandar pra ela, e ela vai executar uma função em cada um dois itens que tem dentro do array
# O ARRAY REDUCE TEM UM TERCEIRO PARAMETRO QUE VAI DEFINIR O VALOR INICIAL DO PRIMEIRO PARAMETRO

// function somar($subtotal, $item) {
//   $subtotal += $item;
//   return $subtotal;
// }

// $total = array_reduce($numeros, 'somar');

// echo $total;

# UM OUTRO EXEMPLO

$alunos = [
  ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
  ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
  ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
  ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
  ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
  ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

# TOTAL DE HOMENS
function contar_m($subtotal, $item) {
  if($item['sexo'] == 'M') {
    $subtotal++;
  }
  return $subtotal;
}

# SOMA DAS NOTAS DOS HOMENS
function soma_m($subtotal, $item) {
  if($item['sexo'] === 'M') {
    $subtotal += $item['nota'];
  }
  return $subtotal;
}
$soma_m = array_reduce($alunos, 'soma_m');
$total_m = array_reduce($alunos, 'contar_m');

// Média dos homens
$media_m = $soma_m / $total_m;

echo 'Total de homens: '.$total_m.'<br/>';
echo 'Soma das notas de homens: '.$soma_m.'<br/>';
echo 'A média das notas de homens: '.$media_m.'<br/>';