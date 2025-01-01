<?php 

// CLASSE
// TIPOS DE VARIAVEIS DENTRO DE UMA CLASSE
// - PUBLIC (pode ser acessada de fora)
// - PROTECTED (não pode ser acessada de fora)
// - PRIVATE (não pode ser acessada de fora)

class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function aumentarLike() {
    $this -> likes++;
  }
}

// OBJETO
$post1 = new Post();
$post1 -> likes = 2;
$post1 -> comments = ['teste'];
$post1 -> author = 20; // Ele vai aceitar, pq o PHP consegue entender e transformar o numero em string
$post2 = new Post();


echo 'POST 1: '.$post1 -> likes.'</br>';
echo 'POST 2: '.$post2 -> likes;