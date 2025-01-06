<?php
class Post {
    private int $id;
    private int $likes = 0;

    // ENCAPSULAMENTO
    protected function set_id($id){
        $this -> id = $id;
    }
    public function get_id() {
        return $this -> id;
    }
    protected function set_likes($like) {
        $this -> likes = $like;
    }
    public function get_likes() {
        return $this -> likes;
    }
}
// Aplicando a herança, dentro da classe Foto nós vamos utilizar também metodos e propriedades da classe Post
class Foto extends Post {
    private $url;

    public function __construct($id) {
        $this -> set_id($id);
        $this -> set_likes(77);
    }

    public function set_url($link) {
        $this -> url = $link;
    }
    
    public function get_url() {
        return $this -> url;
    }
}


$foto = new Foto(20); // Criando meu objeto ja com o ID da foto por causa do __costructor
$foto -> set_url('teste.jpg');


echo "FOTO #".$foto -> get_id()." - ".$foto -> get_likes().' Likes - URL: '.$foto -> get_url().'</br>';
