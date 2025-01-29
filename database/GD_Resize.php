<?php

$arquivo = 'paisagem.jpg';
$max_width = 500;
$max_height = 250;

list($original_width, $original_height) = getimagesize($arquivo);

$ratio = $original_width / $original_height;
$ratio_dest = $max_width / $max_height;

$final_width = 0;
$final_height = 0;

if($ratio_dest > $ratio) {
    $final_width = $max_height * $ratio;
    $final_height = $max_height;
} else {
    $final_height = $max_width / $ratio;
    $final_width = $max_width;
}

$imagem = imagecreatetruecolor($final_width, $final_height);
$original_img = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $original_img,
    0, 0, 0, 0,
    $final_width,
    $final_height,
    $original_width,
    $original_height
);

imagejpeg($imagem, 'paisagem_nova.jpg', 100);