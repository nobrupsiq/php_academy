<?php

rename('teste.txt', 'teste2.txt'); # Recebe dois parametros. 1° Caminho até o arquivo, 2° o novo nome

rename('teste2.txt', 'pasta/teste2.txt'); # Mover um arquivo para outro local

copy('pasta/teste2.txt', 'teste.txt'); # vai gerar uma copia na raiz