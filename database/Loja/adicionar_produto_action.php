<?php 

require 'config.php';
require 'Produto_DAO_MySql.php';

$produto_DAO = new Produto_DAO_MySql($pdo);

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);

if($nome && $preco) {
    $novo_produto = new Produto();

    $novo_produto -> set_id($id);
    $novo_produto -> set_nome($nome);
    $novo_produto -> set_preco($preco);

    $produto_DAO -> adicionar_produto($novo_produto);

    header('location: index.php');
    exit;

} else {
    header('location: adicionar_produto.php');
    exit;
}
