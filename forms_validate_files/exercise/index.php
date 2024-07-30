<?php
# Ao entrar no arquivo index, irá verificar se existe uma session com o 'name' preenchido, se existir ele vai para a tela de index dando boas vindas ao 'name', se não existir irá redirecionar para a tela de formulario.

session_start();

if (empty($_SESSION['nome'])) {
  header('Location:login.php');
}
?>

<html>

<head>
  <title>Página secreta!</title>
</head>

<body>
  <h1>Olá, <?php echo $_SESSION['nome']; ?> - <a href='exit.php'>Sair</a></h1>
</body>

</html>