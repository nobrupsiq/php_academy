<?php
echo time(); // 01/01/1970 
echo '<br/>';
echo date('d/m/Y H:i:s'); //dia/mes/ano Hora:minuto:segundos
echo '<br/>';
echo '<br/>';

$dataFormat = '2020-03-07';
echo date('d / m / Y', strtotime($dataFormat));

echo '<br/>';
echo '<br/>';

// EXERCICIO
// CRIAR UMA FUNÇÃO QUE IRÁ RECEBER UMA STRING COM UMA DATA. A FUNÇÃO IRÁ RETORNAR O DIA DA SEMANA EM PORTUGUES. EX: SEXTA-FEIRA;

echo 'EXERCICIO ↓';
echo '</br>';
echo "CRIAR UMA FUNÇÃO QUE IRÁ RECEBER UMA STRING COM UMA DATA. A FUNÇÃO IRÁ RETORNAR O DIA DA SEMANA EM PORTUGUES. EX: SEXTA-FEIRA";

echo '<br/>';
echo '<br/>';

function date_to_BR($date)
{
  switch (date('w', strtotime($date))) {
    case 0:
      return 'Domingo';
      break;
    case 1:
      return 'Segunda-Feira';
      break;
    case 2:
      return 'Terça-Feira';
      break;
    case 3:
      return 'Quarta-Feira';
      break;
    case 4:
      return 'Quinta-Feira';
      break;
    case 5:
      return 'Sexta-Feira';
      break;
    case 6:
      return 'Sábado';
      break;
  }
}

$date = '2024-07-27';
echo date('d/m/Y', strtotime($date)) . ' - ' . date_to_BR($date);
