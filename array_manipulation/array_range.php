<?php
#A função range nos possibilita criar um array ja com os valores dentro.
#range possui dois parametros o 1° = Qual é o item que vai começar e o 2° parametro é o item que vai terminar. 3° parametro é um tipo de multiplicador.
#OBS: Aceita tipo number e literal

$array = range('x', 'y');

foreach ($array as $item) {
  echo $item . "</br>";
}
