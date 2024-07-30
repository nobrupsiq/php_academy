<?php
$nome = filter_input(INPUT_GET, "nome");
$idade = filter_input(INPUT_GET, "idade");

if ($nome || $idade) {
  echo 'NOME: ' . $nome . "<br/>";
  echo 'IDADE: ' . $idade;
} else {
  header('Location: http_request.php');
  exit;
}
