 <?php

function dividir($numero) {
  $metade = $numero / 2;
  echo $metade.'<br/>';

  if(round($metade) > 0) {
    dividir($metade);
  }
}

echo dividir(100);