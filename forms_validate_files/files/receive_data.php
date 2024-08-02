<?php

# Como eu consigo me proteger de nomes de arquivos maliciosos?
# A melhor solução disparado é você gerar o seu proprio nome de arquivo.

echo '<pre>';
print_r($_FILES);

$allowed = array('image/jpeg', 'image/jpg', 'image/png');

# in_array - checa se um valor existe em um array
if (in_array($_FILES['file']['type'], $allowed)) {
  echo 'Arquivo salvo com sucesso!';
} else {
  echo 'Arquivo não permitido!';
}

$nome = md5(time() . rand(0, 1000)) . '.jpg';
move_uploaded_file($_FILES['file']['tmp_name'], '../files/' . $nome);
