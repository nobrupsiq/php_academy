<?php
require 'config.php';
require 'DAO/Usuario_DAO_MySQL.php';

$usuario_DAO = new Usuario_DAO_MySQL($pdo);

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {

    if($usuario_DAO -> find_by_email($email) === false) {
        $novo_usuario = new Usuario();
        $novo_usuario -> set_nome($name);
        $novo_usuario -> set_email($email);

        $usuario_DAO -> add($novo_usuario);

        header("location: index.php");
        exit;
    } else {
        header('location: adicionar_usuario.php');
    }
}
