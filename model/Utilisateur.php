<?php

class Utilisateur
{

    private $username;
    private $password;
    private $role;

    public function __construct($username, $password, $role) {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }
    /*public function ajouterUtilisateur()
    {
        global $conn; // On suppose que $conn est une connexion à la base de données

        $sql = "INSERT INTO user (username, password, role) VALUES (:username, :password, :role)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':role', $this->role);
        $stmt->execute();

        return $stmt->rowCount(); // Retourne le nombre de lignes insérées
    }*/
}