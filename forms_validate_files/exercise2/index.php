<?php
  session_start();
?>

<html>
  <header>
    <title>Formulario</title>
  </header>
  <body>
    <form method="POST" action="receive_data.php">
      <label>Novo nome: </br></label>
      <input type="text" name="nome">
      <input type="submit" value="Adicionar">
    </form>
    <?php
        if(!empty($_SESSION['erro'])) {
          echo $_SESSION['erro'];
          unset($_SESSION['erro']);
        }
      ?>
    <h2>Lista de nomes:</h2>
    <ul>
      <?php
        echo file_get_contents('name_list.txt')
      ?>
    </ul>
  </body>
</html>