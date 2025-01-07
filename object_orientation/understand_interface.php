<?php

// serve apenas para organização
interface Database {
    public function listar_produtos();
    public function adicionar_produto();
    public function alterar_produto();
}

class My_sql_DB implements Database {

    // leitura
    // escrita
    // alteração
    // remoção

    public function listar_produtos() {

    }
    public function adicionar_produto() {
        echo "Adicionando com MySQL";
    }
    public function alterar_produto() {

    }
}

class Oracle_DB implements Database {
    public function listar_produtos() {

    }
    public function adicionar_produto() {
        echo 'Adicionando com oracle';
    }
    public function alterar_produto() {

    }

}

class Node_DB implements Database {
    // está dando erro pq eu não implementei o method adicionar_produto()
    // para isso que serve a interface para eu criar um controle de qualidade
    public function listar_produtos() {

    }
    public function adicionar_produto() {
        echo 'Adicionando com NodeDB';
    }
    public function alterar_produto() {

    }
}

$db = new Node_DB();
$db -> adicionar_produto();