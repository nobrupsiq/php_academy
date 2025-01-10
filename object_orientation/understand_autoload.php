<?php
// O autoload em PHP é uma funcionalidade que carrega automaticamente classes, interfaces ou traits quando elas são utilizadas, sem a necessidade de incluir manualmente seus arquivos com require ou include.

// Isso é feito configurando uma função de autoload (como spl_autoload_register) que localiza e carrega os arquivos necessários com base no nome da classe.

require 'autoload.php';

$m = new Matematica();
echo $m -> somar(10, 20);