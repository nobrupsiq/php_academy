<?php

require 'config.php';
require 'DAO/Usuario_DAO_MySQL.php';

$usuario_DAO = new Usuario_DAO_MySQL($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $usuario = $usuario_DAO -> find_by_id($id);
}

if($usuario === false) {
    header('location: index.php');
    exit;
}
?>


<form action="editar_usuario_action.php" method="POST">
    <input type="hidden" name="id" value="<?=$usuario -> get_id();?>">
    <label>
        Nome: </br>
        <input type="text" name="name" value='<?=$usuario -> get_nome();?>'>
    </label>
    </br>
    <label>
        Email:</br>
        <input type="email" name='email' value='<?=$usuario -> get_email();['email']?>'>
    </label>
    </br></br>
    <input type="submit" value="Salvar">
</form>