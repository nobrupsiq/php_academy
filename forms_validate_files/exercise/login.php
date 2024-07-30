<?php
session_start();
?>

<html>

<head>
  <title>Formulário de Login</title>
</head>

<body>
  <h1>Qual seu nome?</h1>
  <?php
  if (!empty($_SESSION['erro'])) {
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
  }
  ?>

  <form method="POST" action="receive_files.php">
    <input type="text" name="nome"> </br>
    <input type="submit" value="salvar">
  </form>
</body>

</html>