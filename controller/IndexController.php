<?php

require_once "model/Database.php";
require_once "model/Utilisateur.php";

class IndexController
{
    public function model()
    {
        // $model = new Database();
        // $model->getConnection();
        require_once "vues/home.php";
    }
    
    public function Connexion()
    {
        // $model = new Database();
        // $model->getConnection();
        require_once "vues/identification.php";
    }

    public function Bibliotheque()
    {
        // $model = new Database();
        // $model->getConnection();
        require_once "vues/bibliotheque.php";
    }
    // public function getUser(){
    //     // Exemple d'utilisation de la classe
    //     $utilisateur = new Utilisateur('Dupont', '1234', 'Lecteur');

    //     $resultat = $utilisateur->ajouterUtilisateur();

    //     if ($resultat > 0) {
    //         echo "Utilisateur ajouté avec succès";
    //     } else {
    //         echo "Erreur lors de l'ajout de l'utilisateur";
    //     }
    // }

    }