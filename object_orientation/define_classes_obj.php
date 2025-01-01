<?php

// CLASSE
class Post {
  public $likes = 0;
  public $comments = [];
  public $author;
}

// OBJETO
$post1 = new Post();
$post1 -> likes = 3;
$post1 -> comments = 'Olá';
$post1 -> author = 'Bruno';

$post2 = new Post();
$post2 -> likes = 10;

echo 'POST 1: '.$post1 -> likes.' Likes'.'</br>';
echo 'POST 2: '.$post2 -> likes.' Likes'.'</br>';
echo $post1 -> comments.'<br/>';
echo $post1 -> author.'<br/>';