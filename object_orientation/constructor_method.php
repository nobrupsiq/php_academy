<?php
class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function __construct($postID) { 
    $this -> id = $postID;
    // consultar banco de dados para pegar informações do POST
    $this -> likes = 12;
  }

  public function aumentarLike() {
    echo 'abc';
    $this -> likes++;
  }
}

// OBJETO
$post1 = new Post(1);

$post1 -> comments = ['teste'];
$post1 -> author = 20; // Ele vai aceitar, pq o PHP consegue entender e transformar o numero em string
$post2 = new Post(2);


echo 'POST 1: '.$post1 -> likes.'</br>';
echo 'POST 2: '.$post2 -> likes;
?>
<pre class="language-php">
  <code>
    <?php class Filme { 
      public $genero; 
      public $classificacao; 
      public $atores = []; 
      public function __construct($g, $c) { 
        $this->genero = $g; $this->classificacao = $c; 
        } 
      } 
      $filme = new Filme('Comédida', 16); 
      print_r( $filme ); 
    ?>
    </code>
  </pre>
  