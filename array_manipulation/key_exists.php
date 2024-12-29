<?php
$array = [
  'nome' => 'Bruno',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Verde',
  'profissao' => 'Tester'
];

if (key_exists('idade', $array)) { # Key_exists requer dois parametros, o primeiro é o nome da chave que voce quer verificar, o segundo parametro é onde voce vai verificar se tem o primeiro parametro?
  $idade = $array['idade'];
  echo $idade . " anos";
} else {
  echo 'Não tem idade.';
}
