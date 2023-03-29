<?php
require_once 'vues/home.php';
require_once "controller/IndexController.php";
/*echo "<pre>";
var_dump($_POST);
if($_POST)exit;*/
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

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La biblothèque de paris - </title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<section>
        <input type="checkbox" id="check">
        <header>
            <h2><a href="#" class="logo">Livraria</a></h2>
            <form method="post" action="" class="navigation">
            <input type="submit" name="accueil" id="" >   
            <input type="submit" name="connexion" id="Connexion">
            <input type="submit" name="bibliotheque" id="">
            </form>
            
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>
        <div class="content">
            <div class="info">
                <h2>Par amour des livres <br> <span>Soyez curieux</span></h2>
                <p>Entrez dans le monde de la lecture et découvrez une expérience immersive comme jamais auparavant. Notre librairie offre une sélection diversifiée de livres pour tous les goûts, des classiques intemporels aux best-sellers les plus récents. Avec un environnement chaleureux et accueillant, vous pouvez vous installer confortablement dans notre coin de lecture pour vous plonger dans votre prochaine aventure littéraire. Que vous soyez à la recherche d'inspiration, de divertissement ou simplement d'une pause détente, notre équipe de passionnés de livres est là pour vous aider à trouver le livre parfait. Rejoignez-nous et découvrez le pouvoir de la lecture chez <strong>Livraria</strong>.</p>
                <a href="#" class="info-btn">Rejoignez la communauté</a>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>
</body>
</html>