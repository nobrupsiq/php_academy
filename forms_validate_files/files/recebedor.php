<?php
// echo '<pre>';
// print_r($_FILES); # O arquvio vai para uma pasta temporaria

// $nome = $_FILES['arquivo']['name']; # Pegando o nome do arquivo enviado no upload
// move_uploaded_file($_FILES['arquivo']['tmp_name'], 'pasta/'.$nome); # SALVANDO O ARQUIVO EM UMA PASTA. OBS: a função move_uploads_file requer dois argumentos, o local do arquivo e a pasta onde voce quer jogar o arquivo enviado no upload


# VAI ME RETORNAR UM ARRAY ASSIM ↓

# Array
#(
#  [arquivo] => Array
#      (
#          [name] => Bruno.jpg
#          [full_path] => Bruno.jpg
#          [type] => image/jpeg # CHAMADO TAMBÉM DE MIME TYPE
#          [tmp_name] => C:\xampp\tmp\php5C54.tmp
#          [error] => 0
#          [size] => 44086
#      )
#)


# ENVIAR O ARQUIVO PELO NOME NÃO É BOM PARA A SEGURANÇA. A MELHOR SOLUÇÃO É GERAR O SEU PROPRIO NOME (NOME ALEATORIO) ↓

echo '<pre>';
print_r($_FILES); 


# Vamos conferir se o tipo do arquivo é o tipo que eu quero

$permitidos = ['imagem/jpeg', 'image/jpg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $permitidos)) { # O PRIMEIRO ARGUMENTO DO in_array é o type do arquivo, o segundo argumento é 'eu vou procurar isso aonde?' em uma lista de array que vai aceitar tal coisas. como imagem/jpeg...
  $nome = md5(time().rand(0, 1000)).'.jpg'; #gerando numero com letras aleatorias voce tem um nome unico, melhorando a segurança
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'pasta/'.$nome);

  echo 'Arquivo salvo com sucesso!';
} else {
  echo 'Arquivo não permitido!';
} 
 
?>

