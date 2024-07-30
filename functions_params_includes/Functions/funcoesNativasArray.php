<?php
$lista = ['nome1', 'nome2', 'nome3', 'nome4'];

echo "TOTAL: " . count($lista); // count irá exibir a quantidade de elementos que tenho em minha lista.

echo '<br/>';

$listaAlunos = ['bruno', 'pedro', 'marlon', 'matheus'];
$aprovados = ['bruno', 'marlon'];
$reprovados = array_diff($listaAlunos, $aprovados); // array_diff retorna a diferença entre uma lista e outra;

echo print_r($reprovados);

echo '<br/>';

$numeros = [10, 20, 24, 91, 18];
$filtrados = array_filter($numeros, function ($n) { // Filtra o array
  if ($n < 30) {
    return true;
  } else {
    return false;
  }
});

echo '<br/>';

echo print_r($filtrados);

echo '<br/>';

$dobrarNumeros = array_map(function ($item) {
  return $item * 2;
}, $numeros);

print_r($dobrarNumeros);

echo '<br/>';

$numeros2 = [10, 20, 24, 91, 18];

print_r($numeros2);
array_pop($numeros2); // Remove o ultimo item do array
echo '<br/>';
array_shift($numeros2); // Remove o primeiro item do meu array;


// in_array primeiro parametro é o que eu quero verificar se existe, segundo parametro é a minha lista
if (in_array(24, $numeros2)) {
  echo 'Existe.';
} else {
  echo 'Não existe.';
}
echo '<br/>';

print_r($numeros2);

// array_search; A diferença entre o in_array e o array_search é que o in_array você vai querer saber apenas se tem o elemento na lista. O array_search vai dizer se tem o elemento na lista e também irá retornar a posição desse elemento.
// OBS: Se você só quer saber se tem certo número no array, é recomendado o uso do in_array. Se você quiser saber a posição real do elemento utilize o array_search;

echo '<br/>';
$pos = array_search(24, $numeros2);
echo $pos;

echo '<br/>';

// ODERNAÇÃO DE ARRAY

$numeros3 = [10, 20, 24, 91, 18];

sort($numeros3); // Ordenção em ordem crescente
print_r($numeros3);
echo '<br/>';
// rsort($numeros3); // Ordenação em ordem decrescente
echo '<br/>';
rsort($numeros3); // Mantém o index do item em ordem decrescente
arsort($numeros3); // Mantém o index do item em ordem crescente
echo "A CHAVE 3 É: " . $numeros3[3];
echo '<br/>';
print_r($numeros3);

echo '<br/>';
echo '<br/>';

$nome = 'Bruno pires de siqueira';
$splitName = explode(' ', $nome); // retorna um array
print_r($splitName);
$completeName = implode(' ', $splitName);

echo '<br/>';
echo $completeName;

echo '<br/>';
