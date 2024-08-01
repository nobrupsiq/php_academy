<?php
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$name_list = file_get_contents('name_list.txt');

if (empty($nome)) {
  echo $_SESSION['erro'] = "<p style='color: red'>O nome não foi preenchido.</p>";
  header('Location: index.php');
} else {
  $name_list .= "<li>$nome</li>";
  file_put_contents('name_list.txt', $name_list);
}
header('Location: index.php');
