<?php
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
  echo 'NOME: ' . $nome . "<br/>";
  echo 'EMAIL: ' . $email . "<br/>";
  echo 'IDADE: ' . $idade;
} else {
  header('Location: http_request.php');
  exit;
}
