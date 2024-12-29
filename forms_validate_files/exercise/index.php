<?php
  session_start();

  if(empty($_SESSION['nome'])) {
    header('location: login.php');
  }
?>

<html>
  <header>
    <title>Usuario logado</title>
  </header>
  <body>
    <h1>Olá, <?php echo $_SESSION['nome'];?> - <a href="sair.php">Logout</a></h1>
  </body>
</html>