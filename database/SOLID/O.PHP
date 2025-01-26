<?php

// Principio Aberto-Fechado
// Objetos, classes ou entidades devem está abertas para extenssão(aumentar a funcionalidade), mas fechadas para modificações

interface Remuneravel {
    public function remuneracao();
}

class Contrato_clt implements Remuneravel {
    public function remuneracao() {}
}

class Estagio implements Remuneravel {
    public function remuneracao() {}
}

class Contrato_pj implements Remuneravel {
    public function remuneracao() {}
}

class Contrato_internacional implements Remuneravel {
    public function remuneracao() {}
}

class Folha_de_pagamento {
    public function calcular(Remuneravel $funcionario) {
        return $funcionario -> remuneracao();
    }
}

