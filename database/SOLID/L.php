<?php

class A {
    public function get_nome() {
        return 'Meu nome é A';
    }
}

class B extends A {
    public function get_nome() {
        return 'Meu nome é B';
    }
}

function imprime_nome(A $obj) {
    return $obj -> get_nome();
}

$objeto1 = new A();
$objeto2 = new B();

echo imprime_nome($objeto1)."</br>"; // A
echo imprime_nome($objeto2)."</br>"; // B