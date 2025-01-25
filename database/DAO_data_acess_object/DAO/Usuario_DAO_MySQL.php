<?php 

require_once 'models/Usuario.php';

class Usuario_DAO_MySQL implements Usuario_DAO {
    private $pdo;

    public function __construct(PDO $driver) {
        $this -> pdo = $driver;
    }
    
    public function add(Usuario $usuario) {
        $sql = $this -> pdo -> prepare('INSERT INTO usuarios (nome, email) VALUES (:nome, :email)');
        $sql -> bindValue(':nome', $usuario -> get_nome());
        $sql -> bindValue(':email', $usuario -> get_email());
        $sql -> execute();

        $usuario -> set_id($this -> pdo -> lastInsertId());
        return $usuario;
    }

    public function find_all() {
        $array = [];

        $sql = $this -> pdo -> query('SELECT * FROM usuarios');
        if($sql -> rowCount() > 0) {
            $data = $sql -> fetchAll();

            foreach($data as $item) {
                $usuario = new Usuario();
                $usuario -> set_id($item['id']);
                $usuario -> set_nome($item['nome']);
                $usuario -> set_email($item['email']);

                $array[] = $usuario;
            }
        }

        return $array;
    }
    public function find_by_id($id) {
        $sql = $this -> pdo -> prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql -> bindValue(':id', $id);
        $sql -> execute();

        if($sql -> rowCount() > 0) {
            $data = $sql -> fetch();

            $usuario = new Usuario();
            $usuario -> set_id($data['id']);
            $usuario -> set_nome($data['nome']);
            $usuario -> set_email($data['email']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function find_by_email($email) {
        $sql = $this -> pdo -> prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql -> bindValue(':email', $email);
        $sql -> execute();

        if($sql -> rowCount() > 0) {
            $data = $sql -> fetch();

            $usuario = new Usuario();
            $usuario -> set_id($data['id']);
            $usuario -> set_nome($data['nome']);
            $usuario -> set_email($data['email']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function update(Usuario $usuario) {
        $sql = $this -> pdo -> prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql -> bindValue(':nome', $usuario -> get_nome());
        $sql -> bindValue(':email', $usuario -> get_email());
        $sql -> bindValue(':id', $usuario -> get_id());
        $sql -> execute();

        return true;
    }
    public function delete($id) {

    }
}