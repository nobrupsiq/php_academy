<?php 

require 'config.php';
require 'Produto_DAO_MySql.php';

$produto_DAO = new Produto_DAO_MySql($pdo);

$produto = false;
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $produto = $produto_DAO -> encontrar_pelo_id($id);
}
if($produto === false ) {
    header('location: index.php');
    exit;
}
?>

<form method="POST" action="editar_produto_action.php">
    <input type="hidden" name="id" value="<?= $produto -> get_id();?>">
    <label>
        Nome
        </br>
        <input type="text" name='name' value="<?= $produto -> get_nome() ?>">
    </label>
    </br></br>
    <label>
        Preco
        </br>
        <input type="text" name='preco' value="<?= $produto -> get_preco() ?>">
    </label>
    </br></br>
    <input type="submit" value="Salvar" >
</form>




