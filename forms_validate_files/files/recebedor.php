<?php
echo '<pre>';
print_r($_FILES); # O arquvio vai para uma pasta temporaria

$nome = $_FILES['arquivo']['name']; # Pegando o nome do arquivo enviado no upload
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'pasta/'.$nome); # SALVANDO O ARQUIVO EM UMA PASTA. OBS: a função move_uploads_file requer dois argumentos, o local do arquivo e a pasta onde voce quer jogar o arquivo enviado no upload


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
?>

