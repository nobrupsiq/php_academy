<?php
require('config.php');

$info = []; // Vai ter as informações dos usuarios
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE id = :id"); // Quando vamos enviar dados nós não utilizamos somente o metodo 'query' utilizamos o prepare
    $sql -> bindValue(":id", $id);
    $sql -> execute();

    // AGORA VAMOS FAZER A VERIFICAÇÃO PARA VER SE O BANDO DE DADOS ENCONTROU ALGUMA COISA
    if($sql -> rowCount() > 0) {
        $info = $sql -> fetch(PDO::FETCH_ASSOC);
        
    } else {
        header('location: index.php');
    }

} else {
    header('location: index.php');
}
?>

<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <label>
        Nome:<br/>
        <input type="text" name='name' value="<?=$info['nome']?>">
    </label></br></br>

    <label>
        Email:<br/>
        <input type="email" name='email' value="<?=$info['email']?>">
    </label></br></br>

    <input type="submit" value="Salvar">
</form>


