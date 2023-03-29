<?php

require_once "controller/IndexController.php";

//echo "<pre>";
//var_dump($_POST);
//if($_POST)exit;
$index = new IndexController();
if (isset($_POST['connexion'])) {
      $index->Connexion();
   exit;
}

if (isset($_POST['accueil'])) {
    $index->model();
 exit;
}
if (isset($_POST['bibliotheque'])){
      $index->Bibliotheque();
   exit;
}
$index->Connexion();

//$index->model();
//$index->getUser();

