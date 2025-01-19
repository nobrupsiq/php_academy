<?php
require 'config.php';

$sql = $pdo -> query('SELECT * FROM usuarios') ;
$lista = [];

if($sql -> rowCount() > 0) {
    $lista = $sql -> fetchAll(PDO::FETCH_ASSOC) ;
}

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
            <td><?= $usuario['id']?></td>
            <td><?= $usuario['nome']?></td>
            <td><?= $usuario['email']?></td>
            <td>
                <a href="editar_usuario.php?id=<?=$usuario['id'];?>">[EDITAR]</a>
                <a href="excluir_usuario.php?id=<?=$usuario['id']?>">[EXCLUIR]</a>
            </td>
            
        </tr>
    <?php endforeach; ?>
</table>