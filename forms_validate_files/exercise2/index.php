<?php
session_start();

?>
<html>

<body>
  <form method="POST" action="receive_data.php">
    <label>
      Novo nome: </br>
      <input type="text" name="nome">

    </label>
    <button>Salvar</button>
  </form>
  <?php
  if (!empty($_SESSION['erro'])) {
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
  }
  ?>
  <h1>Lista de nomes</h1>
  <ul>
    <?php
    echo file_get_contents('name_list.txt');
    ?>
  </ul>
</body>

</html>