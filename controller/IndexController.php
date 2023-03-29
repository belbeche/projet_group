<?php

require_once "model/Database.php";
require_once "model/Utilisateur.php";

class IndexController
<<<<<<< HEAD
{
    public function model()
=======
{ /*public function model()
>>>>>>> ead9ed3c4264f8b5869c3950282f073abec69a5b
    {
        $model = new Database();
        $model->getConnection();
        require_once "vues/index.php";
    }
    
    public function getUser(){
        // Exemple d'utilisation de la classe
        $utilisateur = new Utilisateur('Dupont', '1234', 'Lecteur');

        $resultat = $utilisateur->ajouterUtilisateur();

        if ($resultat > 0) {
            echo "Utilisateur ajouté avec succès";
        } else {
            echo "Erreur lors de l'ajout de l'utilisateur";
        }
    }

    

}