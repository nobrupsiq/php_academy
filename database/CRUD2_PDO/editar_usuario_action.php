<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) {
    $sql = $pdo -> prepare('UPDATE usuarios SET nome = :name, email = :email WHERE id = :id');

    $sql -> bindValue('id', $id);
    $sql -> bindValue('name', $name);
    $sql -> bindValue('email', $email);
    $sql -> execute();

    header('location: index.php');
    exit;
} else {
    header('adicionar.php');
    exit;
}