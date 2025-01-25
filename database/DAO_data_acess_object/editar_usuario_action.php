<?php 

require 'config.php';
require 'DAO/Usuario_DAO_MySQL.php';

$usuario_DAO = new Usuario_DAO_MySQL($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) {

    $usuario = new Usuario();
    $usuario -> set_id($id);
    $usuario -> set_nome($name);
    $usuario -> set_email($email);

    $usuario_DAO -> update($usuario);

    header('location: index.php');
    exit();
} else {
    header('location: editar_usuario.php?='.$id);
    exit();
}