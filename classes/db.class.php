<?php

class Db {
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = 'password';
    private $dbName = 'venera';

    protected function connect() {
        
        try {
            $con = mysqli_connect($this->host, $this->user,$this->pwd, $this->dbName);
            return $con;   
        } catch (Exception $e) {
            print "Error! : " . $e->getMessage();
            die();
        }
    }
}