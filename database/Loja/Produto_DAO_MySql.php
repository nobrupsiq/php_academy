<?php 

require 'config.php';
require_once 'Produto.php';

class Produto_DAO_MySql implements Produto_DAO {
    private $pdo;

    public function __construct(PDO $motor) {
        $this -> pdo = $motor;
    }
    public function adicionar_produto(Produto $produto) {
        $sql = $this -> pdo -> prepare('INSERT INTO produtos (nome, preco) VALUES (:nome, :preco)');
        $sql -> bindValue(':nome', $produto -> get_nome());
        $sql -> bindValue(':preco', $produto -> get_preco());
        $sql -> execute();

        $produto -> set_id($this -> pdo -> lastInsertId());
        return $produto;
    }   
    public function encontrar_pelo_id($id) {
        $sql = $this -> pdo -> prepare('SELECT * FROM produtos WHERE id = :id');
        $sql -> bindValue(':id', $id);
        $sql -> execute();

        if($sql -> rowCount() > 0) {
            $data = $sql -> fetch();
            
            $produto = new Produto();
            $produto -> set_id($data['id']);
            $produto -> set_nome($data['nome']);
            $produto -> set_preco($data['preco']);

            return $produto;
        } else {
            return false;
        }
    }
    public function encontrar_todos() {
        $array = [];

        $sql = $this -> pdo -> query('SELECT * FROM produtos');
        if($sql -> rowCount() > 0) {
            $data = $sql -> fetchAll();
            
            foreach($data as $produto) {
                $novo_produto = new Produto();
                $novo_produto -> set_id($produto['id']);
                $novo_produto -> set_nome($produto['nome']);
                $novo_produto -> set_preco($produto['preco']);

                $array[] = $novo_produto;
            }
        }
        return $array;
    }
    public function atualizar_produto(Produto $produto) {
        $sql = $this -> pdo -> prepare("UPDATE produtos SET nome = :nome, preco = :preco WHERE id = :id");
        $sql -> bindValue(':id', $produto -> get_id());
        $sql -> bindValue(':nome', $produto -> get_nome());
        $sql -> bindValue(':preco', $produto -> get_preco());
        $sql -> execute();

        return true;
    }
    public function deletar_produto($id){
        $sql = $this -> pdo -> prepare('DELETE FROM produtos WHERE id = :id');
        $sql -> bindValue(':id', $id);
        $sql -> execute();
    }
   

    
}