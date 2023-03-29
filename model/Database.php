<?php

class Database
{
    private $host = "localhost";
    private $db_name = "projet_group";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            echo 'Vous êtes bien connecté à la base de donnée projet_group';
        } catch(PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }
}