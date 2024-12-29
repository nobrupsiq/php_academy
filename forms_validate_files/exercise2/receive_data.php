<?php
  session_start();
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

  if(empty($nome)) {
    $_SESSION['erro'] = 'Nome não preenchido!';
    header('Location: index.php');
  } else {
    $list_nomes = file_get_contents('name_list.txt');
    $list_nomes .= '<li>'.$nome.'</li>';
    file_put_contents('name_list.txt', $list_nomes);
  }
  header('Location: index.php');
  

?>
 
  