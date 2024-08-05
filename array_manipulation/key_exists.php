<?php
$array = [
  'nome' => 'Bruno',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Verde',
  'profissao' => 'Tester'
];

if (key_exists('idade', $array)) {
  $idade = $array['idade'];
  echo $idade . " anos";
} else {
  echo 'Não tem idade.';
}
