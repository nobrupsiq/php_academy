<?php
require 'config.php'; // PDO vem daqui
require 'DAO/Usuario_DAO_MySQL.php';

$usuario_DAO = new Usuario_DAO_MySQL($pdo);
$lista = $usuario_DAO -> find_all();

?>

<a href="adicionar_usuario.php">ADICIONAR USUARIO</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?= $usuario -> get_id()?></td>
            <td><?= $usuario -> get_nome()?></td>
            <td><?= $usuario -> get_email()?></td>
            <td>
                <a href="editar_usuario.php?id=<?=$usuario -> get_id();?>">[EDITAR]</a>
                <a href="excluir_usuario.php?id=<?=$usuario -> get_id()?>">[EXCLUIR]</a>
            </td>
            
        </tr>
    <?php endforeach; ?>
</table>