<?php
session_start();
require('header.php');

if($_SESSION['aviso']) {
  echo $_SESSION['aviso'];
  $_SESSION['aviso'] = '';
  }

?>

<!--action é para onde os dados serão enviados-->
<!--se não existir o atributo action os dados serão enviados para o index-->
<!--se eu não especificar nada nem o action quanto o method, por padrão o method será GET(irá aparecer os dados na querySTRING)-->

<a href="apagar.php">Apagar Cookie</a>
<form method="POST" action='recebedor.php'>
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

  <label>
    Idade:
    </br>
    <input type="text" name="idade">
  </label>
  </br>
  </br>
  
  <input type="submit" value="Enviar">


</form>

