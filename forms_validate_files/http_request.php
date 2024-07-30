<?php
session_start();
require('header.php');

?>

<!--action é para onde os dados serão enviados-->

<!--se não existir o atributo action os dados serão enviados para o index-->

<!--se eu não especificar nada nem o action quanto o method, por padrão o method será GET(irá aparecer os dados na querySTRING)-->



<form method="POST" action="validate_info.php">
  <label>
    Nome:
    </br>
    <input type="text" name="nome" />
  </label>
  <br />
  <br />

  <label>
    Email:
    </br>
    <input type="text" name="email" />
  </label>
  <br />
  <br />

  <label for="">
    Idade:
    </br>
    <input type="text" name="idade">
  </label>
  </br>
  </br>

  <?php
  if ($_SESSION) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
  }
  ?>
  </br>
  </br>

  <input type="submit" value="Enviar">


</form>