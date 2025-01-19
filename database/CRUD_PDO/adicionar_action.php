<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
    // pegando o email do usuario para verificar ja o email ja está cadastrado na base de dados
    $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql -> bindValue(':email', $email);
    $sql -> execute();

    if($sql -> rowCount() === 0) {
        // Fazneo dessa maneira com o prepare evita ataques DDOS ao meu sistema
        $sql = $pdo -> prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
        $sql -> bindValue(':name', $name); // Aqui ele está associando o valor que voce mandou, não altera na variável
        $sql -> bindValue(':email', $email); 
        //bindParam Faz uma associação na propria variável
        $sql -> execute();

        header('location: index.php');
        exit;
    } else {
        header('Location: adicionar.php');
        exit;
    }
}