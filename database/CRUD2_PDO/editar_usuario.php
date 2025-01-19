<?php
require 'config.php';

$infos = [];
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo -> prepare('SELECT * FROM usuarios WHERE id = :id');
    $sql -> bindValue('id', $id);
    $sql -> execute();

    if($sql -> rowCount() > 0) {
        $infos = $sql -> fetch(PDO::FETCH_ASSOC);
    } else {
        header('location:index.php');
    }
} else {
    header('location: index.php');
}
?>

<form method='POST' action="editar_usuario_action.php">
    <input type="hidden" name='id' value='<?=$infos['id']?>'>
    <label>
        Nome: </br>
        <input type="text" name="name" value="<?=$infos['nome']?>">
    </label>
    <br><br>
    <label>
        Email: </br>
        <input type="email" name="email" value="<?=$infos['email']?>">
    </label>
    <br><br>
    <input type="submit" value="Salvar">
</form>