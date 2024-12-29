<h1>FORMULARIO PHP</h1>
<?php
#isset significa - Está setada essa variavel? se sim ela entra se não estiver setada ela não da erro.
if(isset($_COOKIE['nome'])) {
  $nome = $_COOKIE['nome'];
  echo '<h2>Usuário: '.$nome.'</h2>';
  
}
?>

<hr/>