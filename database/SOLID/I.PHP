<?php

interface Aves {
    public function set_location($latitude, $longetude);
    public function render();
}
interface Aves_que_voam extends Aves { // Dividi a interface pq nem todas as aves voam. Esse é o principio de segregação de interface 
    public function set_altitude($altitude);
}

class Papagaio implements Aves_que_voam {
    public function set_location($latitude, $longetude) {}
    public function set_altitude($altitude) {}
    public function render() {}
}

class Pinguim implements Aves {
    public function set_location($latitude, $longetude) {}
    public function render() {}
}

function teste(Aves $ave) {
    $ave -> render();
}