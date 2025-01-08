<?php
interface Forma {
    public function get_tipo();
    public function get_area();
}

class Quadrado implements Forma {
    private $altura;
    private $largura;

    public function __construct($l, $a) {
        $this -> largura = $l;
        $this -> altura = $a;
    }
    public function get_tipo(){
        return 'Quadrado';
    }
    public function get_area(){
        return $this -> largura * $this -> altura;
    }
};
class Circulo implements Forma {
    private $raio;
    public function __construct($r) {
        $this -> raio = $r;
    }
    public function get_tipo() {
        return 'Circulo';
    }
    public function get_area() {
        return pi() * ($this -> raio * $this -> raio);
    }
};

$quadrado = new Quadrado(5, 5); // 5 de altura 5 de comprimento
$circulo = new Circulo(7); // Raio

// O polimorfismo diz respeito a implementação e não a classe que está acima
// POLI significa VARIOS
// MORFISMO significa FORMA
// Ou seja, varias classes diferentes tem a mesma forma! o mesmo metodo pode pertencer a diferentes classes
// A interface é uma aplicação do polimorfismo
$objetos = [
    $quadrado,
    $circulo
];

foreach($objetos as $objeto) {
    $tipo = $objeto -> get_tipo();
    $area = $objeto -> get_area();
    echo "AREA ".$tipo.": ".$area."<br/>";

}