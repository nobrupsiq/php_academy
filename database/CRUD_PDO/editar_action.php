<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) {
    
    //Query = UPDATE usuarios SET name = 'bruno', email = 'teste@.com' WHERE id = 2
    $sql = $pdo -> prepare("UPDATE usuarios SET nome = :name, email= :email WHERE id = :id");
    $sql -> bindValue(':name', $name);
    $sql -> bindValue(':email', $email);
    $sql -> bindValue(':id', $id);
    $sql -> execute();

    header('location: index.php');
    exit();
} else {
    header('Location: adicionar.php');
    exit;
}


