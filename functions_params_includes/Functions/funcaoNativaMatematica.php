<?php
$numero = 3.42;

echo abs($numero); // Número absoluto
echo "<br/>";
echo pi(); // Numero PI
echo "<br/>";
echo ceil($numero); // Arredonda para cime
echo "<br/>";
echo floor($numero); // Arredonda para baixo
echo "<br/>";
echo round($numero, 3); // Arredonda pra cima ou pra baixo .5(cima) .4(baixo) segundo argumento: precisao de quantas casas decimais
echo "<br/>";
$aleatorio = rand(1, 9); // Gera um numero aleatorio de 1 a 9;
echo $aleatorio;
echo "<br/>";
$lista = [1, 4, 9, 8];
echo max($lista); // Maior número do meu array
echo "<br/>";
echo min($lista); // Menor número do meu array
