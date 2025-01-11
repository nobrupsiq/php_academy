<?php
// PDO("1 tipo de banco de dados: 2=nome do banco de dados; 3= onde o banco de dados está funcionando", "usuario", "senha")
$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

// Pegar a lista de usuarios que tem no meu banco de dados

$sql = $pdo -> query('SELECT * FROM usuarios');
// quero saber quantos registros tem na minha consulta... rowCount
echo 'TOTAL: '.$sql -> rowCount();

$dados = $sql -> fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);