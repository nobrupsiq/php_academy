<?php 
$today = new DateTime();
$end = new DateTime('2025-12-31');

$reveion = $today -> diff($end);
echo 'Faltam: '.$reveion -> format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');
 

$date = new DateTime('2020-01-01');
$date2 = new DateTime('2020-02-15');
// $date -> setTimezone(new DateTimeZone('America/Sao_Paulo'));

// $date -> add(DateInterval::createFromDateString('7 years 2 days 5 minutes')); // adicionar
// $date -> sub(DateInterval::createFromDateString('7 years 2 days 5 minutes')); // Diminuir

// COMPARAR DATAS
// $date2 = new DateTime('2020-02-15');
// if($date > $date2) {
//     echo 'Date 1 é maior que date 2';
// } else {
//     echo 'date 2 é maior que date 1';
// }

// DIFERENÇA ENTRE UMA DATA E OUTRA
// $diff = $date -> diff($date2);
// echo $diff -> format('%a'); // esse %a me da a quantidade total de dias entre um item e outro

// $year = $date -> format('d/m/Y H:i:s');
// echo $year;