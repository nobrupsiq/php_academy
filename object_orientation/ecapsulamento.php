<?php
class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function __construct() { 
    $this -> likes++;
  }
  public function setAuthor($nome) {
    if(strlen($nome) >= 3) {
      $this -> author = ucfirst($nome);
    }
  }
  public function getAuthor() {
    return $this -> author ?? 'Visitante';
  }

}

// OBJETO
$post1 = new Post();
$post1 -> setAuthor('bruno');
$post2 = new Post();
$post2 -> setAuthor('fulano');

echo 'POST 1: '.$post1 -> likes.' likes - '.$post1 -> getAuthor().'</br>';
echo 'POST 1: '.$post2 -> likes.' likes - '.$post2 -> getAuthor().'</br>';