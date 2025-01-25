<?php 
class Produto {
    private $id;
    private $nome;
    private $preco;

    public function get_id() {
        return $this -> id;
    }
    public function set_id($id) {
        $this -> id = trim($id);
    }

    public function get_nome() {
        return $this -> nome;
    }
    public function set_nome($nome) {
        $this -> nome = ucwords(trim($nome));
    }

    public function get_preco() {
        return $this -> preco;
    }

    public function set_preco($preco) {
        $this -> preco = $preco;
    }
}

interface Produto_DAO {
    public function adicionar_produto(Produto $produto);
    public function encontrar_pelo_id($id);
    public function encontrar_todos();
    public function atualizar_produto(Produto $produto);
    public function deletar_produto($id);
}