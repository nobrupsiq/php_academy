<?php
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if ($nome && $idade) {
  $expiracao = time() + (86400 * 30); # 86400 equivale a 1 dia em MS
  setcookie('nome', $nome, $expiracao); #string, variavel, expiracao

  echo 'NOME: '.$nome."<br/>";
  echo 'EMAIL: '.$email."<br/>";
  echo 'IDADE: '.$idade;
} else {
  $_SESSION['aviso']  = 'Peencha os itens corretamente!';
  header("Location: http_request.php");
  exit;
}

