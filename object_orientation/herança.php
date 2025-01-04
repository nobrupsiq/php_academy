<?php
class Post {
    private int $id;
    private int $likes = 0;

    // ENCAPSULAMENTO
    public function set_id($id){
        $this -> id = $id;
    }
    public function get_id() {
        return $this -> id;
    }
    public function set_likes($like) {
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
    }

    public function set_url($link) {
        $this -> url = $link;
    }
    
    public function get_url() {
        return $this -> url;
    }
}

class Texto extends Post {
    private string $body;

    public function __construct($id) {
        $this -> set_id($id);
    }

    public function set_text($texto) {
        $this -> body = $texto;
    }
    public function get_text() {
        return $this -> body;
    }
}

$foto = new Foto(20); // Criando meu objeto ja com o ID da foto por causa do __costructor

$foto -> set_url('teste.jpg');
$foto -> set_likes(12);

$text = new Texto(1);
$text -> set_text('Um texto de exemplo');

echo "FOTO #".$foto -> get_id()." - ".$foto -> get_likes().' Likes - URL: '.$foto -> get_url().'</br>';
echo "Body: #".$text -> get_id().' - Texto: '.$text -> get_text();