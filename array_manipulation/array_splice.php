<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 2); # array_splice vai modificar a propria array, não vai retornar outro array igual no slice
# 1° argumento é o array, o restante é parecido com o slice
# 4° parametro remove o item e substitui pelo que voce colocar.

print_r($array);
?>
<pre class="language-php">
  <code><?php $jogos = ['PES', 'FIFA', 'Spider-Man', 'DOOM']; array_splice($jogos, 3, 1, ['GOD OF WAR', 'CSGO']); var_dump($jogos); ?></code>
</pre> 
<p> De acordo com o código acima, marque a opção correta.</p>