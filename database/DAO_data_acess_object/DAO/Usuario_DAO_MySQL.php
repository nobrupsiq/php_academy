<?php 

require_once 'models/Usuario.php';

class Usuario_DAO_MySQL implements Usuario_DAO {
    private $pdo;

    public function __construct(PDO $driver) {
        $this -> pdo = $driver;
    }
    
    public function add(Usuario $usuario) {

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

    }
    public function update(Usuario $usuario) {

    }
    public function delete($id) {

    }
}