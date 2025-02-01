<?php

$arquivo = 'paisagem.jpg';
$width = 300;
$height = 300;

list($original_width, $original_height) = getimagesize($arquivo);

$ratio = $original_width / $original_height;
$ratio_dest = $width / $height;

$final_width = 0;
$final_height = 0;
$final_x = 0;
$final_y = 0;

if($ratio_dest > $ratio) {
    $final_width = $height * $ratio;
    $final_height = $height;
} else {
    $final_height = $width / $ratio;
    $final_width = $width;
}

if($final_width < $width) {
    $final_width = $width;
    $final_height = $width / $ratio;
    $final_y = -(($final_height - $height) / 2);
 
} else {
    $final_height = $height;
    $final_width = $height * $ratio;
    $final_x = -(($final_width - $width) / 2); 
}

$imagem = imagecreatetruecolor($width, $height);
$original_img = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $original_img,
    $final_x,
    $final_y,
    0, 0,
    $final_width,
    $final_height,
    $original_width,
    $original_height
);
header('Content-Type: image/jpeg');
imagejpeg($imagem, null, 100);