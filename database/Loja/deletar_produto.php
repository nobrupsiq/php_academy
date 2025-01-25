<?php 

require 'config.php';
require 'Produto_DAO_MySql.php';

$produto_DAO = new Produto_DAO_MySql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $produto_DAO -> deletar_produto($id);
} 
header('location: index.php');
exit;