<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

$retorno  = array_slice($array, -2); # 1° parametro é o array que eu quero cortar 2° De onde eu quero que comece a cortar 3° Vai pegar dois itens depois do valor que indiquei no segundo parametro

print_r($retorno);