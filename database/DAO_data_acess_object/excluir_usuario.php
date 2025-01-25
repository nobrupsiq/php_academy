<?php 

require 'config.php';
require 'DAO/Usuario_DAO_MySQL.php';

$usuario_DAO = new Usuario_DAO_MySQL($pdo);
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $usuario_DAO -> delete($id);
}
header('location: index.php');
exit;
