<?php
// Inversão da dependência

interface DB_connection {
    public function connect();
}

class MySql_Connection implements DB_connection {
    public function connect() {}
}

class Oracle_Connection implements DB_connection {
    public function connect() {}
}

class Mongo_Connection implements DB_connection {
    public function connect() {}
}

class Usuario_DAO{
    private $db;

    public function __contruct(DB_connection $db_con) {
        $this -> db = $db_con;
    }
}
