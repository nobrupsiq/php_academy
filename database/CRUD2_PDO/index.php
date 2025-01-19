<?php

require ('config.php');

$sql = $pdo -> query('SELECT * FROM usuarios');
$name_list = [];

if($sql -> rowCount() > 0) {
    $name_list = $sql -> fetchAll(PDO::FETCH_ASSOC);
}
?>


<a href="adicionar_usuario.php">Adicionar usuario</a>
<table border="1" widht="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data/hora da Criação</th>
        <th>Ações</th>
    </tr>
    
        <?php foreach($name_list as $usuario) : ?>
            <tr>
                <td><?= $usuario['id']?></td> 
                <td><?= $usuario['nome']?></td> 
                <td><?= $usuario['email']?></td> 
                <td><?= date('d/m/Y H:i:s', strtotime($usuario['create_date']))?></td> 
                <td>
                    <a href="editar_usuario.php?id=<?=$usuario['id'];?>">Editar</a>
                    <a href="excluir_usuario.php?id=<?=$usuario['id'];?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
</table>