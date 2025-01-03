<?php

// CLASSE
// TIPOS DE VARIAVEIS DENTRO DE UMA CLASSE
// - PUBLIC (pode ser acessada de fora)
// - PROTECTED (não pode ser acessada de fora)
// - PRIVATE (não pode ser acessada de fora)

class Post {
  public $likes = 0;
  public $comments = [];
  public $author;

  public function aumentarLike() {
    $this -> likes++;
  }
}

// OBJETO
$post1 = new Post();
$post1 -> aumentarLike();
$post1 -> aumentarLike();
$post2 = new Post();
$post2 -> aumentarLike();

echo 'POST 1: '.$post1 -> likes.' Likes'.'</br>';
echo 'POST 2: '.$post2 -> likes.' Likes'.'</br>';

// O QUE SÃO MÉTODOS NA ORIENTAÇÃO A OBJESTOS?
// - Ações a serem exibidas pelas instâncias de classe na qual o método esta associado.