1° Você irá criar uma lista de nomes em um arquivo .txt
2° No index, você irá ler essa lista do arquivo .txt e exibir essa lista.
3° Criar um formulário com um input e um botao de envio
4° O usuario irá digitar um nome na caixa de input e enviar
5° Ao clicar em enviar, o nome digitado deve ir para essa lista .txt
6° Exiba uma mensagem de erro se o usuario tentar enviar um nome vazio.


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