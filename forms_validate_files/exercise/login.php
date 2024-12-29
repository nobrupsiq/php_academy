<?php
  session_start();
?>


<html>
  <header>
    <title>Login</title>
  </header>
  <body>
    <h1>Digite seu nome</h1>

    <?php
      if(!empty($_SESSION['erro'])) {
        echo $_SESSION['erro'];

        unset($_SESSION['erro']);
      }
    ?>

    <form action="processador_formulario.php" method="POST">
      <input type="text" name="nome" > </br>
      <input type="submit" value="Salvar">
    </form>
  </body>
</html>