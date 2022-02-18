<?php

class DBConn {
    private $host = "localhost";
    private $dbname = "parkmandemo2k22";
    private $user = "root";
    private $pwd = "";

    protected function connect() {
        $dsn = 'mysql:host='. $this->host .';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}