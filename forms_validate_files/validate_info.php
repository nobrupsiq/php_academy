<?php
session_start();
#O que são sessões no PHP?
#- São informações armazenadas de cada usuário que está acessando o sistema.

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);

#FILTERS

#FILTER_VALIDATE_EMAIL
#FILTER_VALIDATE_INT
#FILTER_VALIDATE_FLOAT
#FILTER_VALIDATE_IP
#FILTER_VALIDATE_URL

#SANITIZES

#FILTER_SANITIZE_EMAIL
#FILTER_SANITIZE_SPECIAL_CHARS;
#FILTER_SANITIZE_STRING
#FILTER_SANITIZE_URL
#FILTER_SANITIZE_NUMBER_INT
#FILTER_SANITIZE_NUMBER_FLOAT

if ($nome && $idade && $email) {

  # O COOKIE deve ser setado antes de qualquer conteúdo.
  # Qual a diferença de session para Cookies?
  # - Session = Funciona enquanto o navegador estiver aberto.
  # - Cookies = Cookie tem uma validade especifica e fica salvo no seu computador e mesmo fechando o navegador e desligando o PC o cookie ainda vai estar la Obs: des dê que esteja no prazo de validade


  $expiracao = time() + (86400 * 30);
  setcookie('nome', $nome, $expiracao);

  echo 'NOME: ' . $nome . "<br/>";
  echo 'EMAIL: ' . $email . "<br/>";
  echo 'IDADE: ' . $idade;
} else {
  $_SESSION["aviso"] = 'Preencha os campos corretamente!';
  header('Location: http_request.php');
  exit;
}
