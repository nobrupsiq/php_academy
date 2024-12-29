<?php
$array = [
  'nome' => 'Bruno',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Verde',
  'profissao' => 'Tester'
];

?>

<table border="1px">
  <?php foreach ($array as $chave => $valor): ?>
    <tr>
      <th><?php echo $chave ?></th>  
      <td><?php echo $valor ?></td>  
    </tr>
  <?php endforeach; ?>
</table>