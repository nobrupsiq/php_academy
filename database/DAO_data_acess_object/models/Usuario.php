<?php

class Usuario {
    private $id;
    private $nome;
    private $email;

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
    public function get_email() {
        return $this -> email;
    }
    public function set_email($email) {
        $this -> email = strtolower(trim($email));
    }
};

interface Usuario_DAO {
    public function add(Usuario $usuario);
    public function find_all();
    public function find_by_id($id);
    public function update(Usuario $usuario);
    public function delete($id);
}