<?php

require 'config.php';
$user_infos = [];

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql -> bindValue(':id', $id);
    $sql -> execute();
    
    if($sql -> rowCount() > 0) {
        $user_infos = $sql -> fetch(PDO::FETCH_ASSOC);
    } else {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}
?>


<form action="editar_usuario_action.php" method="POST">
    <input type="hidden" name="id" value="<?=$user_infos['id']?>">
    <label>
        Nome: </br>
        <input type="text" name="name" value='<?=$user_infos['nome']?>'>
    </label>
    </br>
    <label>
        Email:</br>
        <input type="email" name='email' value='<?=$user_infos['email']?>'>
    </label>
    </br></br>
    <input type="submit" value="Salvar">
</form>