<?php
require 'config.php';
require 'Produto_DAO_MySql.php';

$produto_DAO = new Produto_DAO_MySql($pdo);
$lista = $produto_DAO -> encontrar_todos();

?>

<a href="adicionar_produto.php">Adicionar produto</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Preço</td>
        <td>Ações</td>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?= $usuario -> get_id() ?></td>
            <td><?= $usuario -> get_nome() ?></td>
            <td>R$ <?= $usuario -> get_preco() ?></td>
            <td>
                <a href="editar_produto.php?id=<?=$usuario -> get_id() ?>">EDITAR</a>
                <a href="deletar_produto.php?id=<?=$usuario -> get_id() ?>">EXCLUIR</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>