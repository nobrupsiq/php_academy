<?php
require 'config.php';
require 'Produto_DAO_MySql.php';

$produto_DAO = new Produto_DAO_MySql($pdo);

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);

if($id && $nome && $preco) {
    $produto = new Produto();

    $produto -> set_id($id);
    $produto -> set_nome($nome);
    $produto -> set_preco($preco);

    $produto_DAO -> atualizar_produto($produto);

    header('location: index.php');
    exit;
} else {
    header('Location: editar_produto.php'.$id);
    exit;
}
