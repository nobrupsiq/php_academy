<?php
# ESSA AULA É EXTREMAMENTE IMPORTANTE

$array = [
  'nome' => 'Bruno',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Verde',
  'profissao' => 'Tester'
];

# Essas funções tem o mesmo objetivo mas com resultados diferentes uma retorna o valor e a outra retorna a chave

$chaves = array_keys($array); # nao vai alterar o array original, vai criar uma copia
$valores = array_values($array);

print_r($chaves);
print_r($valores);