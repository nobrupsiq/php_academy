<?php
$array = [
  'nome' => 'Bruno',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Verde',
  'profissao' => 'Tester'
];


$chaves = array_keys($array);
$valores = array_values($array);
?>

<table border="1px">
    <tr>
      <?php foreach($chaves as $chave): ?>
        <th><?php echo $chave ?></th>
      <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
          <td><?php echo $valor ?></td>
        <?php endforeach; ?>
    </tr>
</table>