<?php
// Injeção de dependencia é quando você insere uma classe dentro de outra, normalmente através do construtor mas não necessariamente

interface Matematica_basica {
    public function somar($x, $y);
}

class Basico1 implements Matematica_basica {
    public function somar($x, $y) {
        return $x + $y;
    }
}

class Basico2 implements matematica_basica {
    public function somar($x, $y) {
        $res = $x;
        for($q = 0; $q < $y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Matematica {
    private $basico;
    // se eu quiser utilizar o motor de fora eu preciso seguir um padrao
    public function __construct(Matematica_basica $b) {
        $this -> basico = $b;
    }

    public function somar($x, $y) {
        return $this -> basico -> somar($x, $y);
    }
}

// $basico = new Basico1();
$mat = new Matematica(new Basico1());
echo $mat -> somar(10, 15);

// O que significa o conceito injeção de dependência no PHP?
// - Método no qual é inserido um objeto de fora de uma classe para ser usado nela