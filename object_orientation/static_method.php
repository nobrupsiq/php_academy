<?php
class Matematica {
  // Com a função estatica, eu consigo utilizar ela sem a necessidade de criar um objeto
  public static string $nome = 'Bruno';
  public static function somar(int $x, int $y) {
    return $x + $y;
  }
}

echo Matematica::somar(2, 3);
echo Matematica::$nome;
