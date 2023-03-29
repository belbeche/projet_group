<?php
require_once 'vues/Index.php'
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="assets/css/style.css"> 
    <title>Page de connexion</title>
  </head>
  <body>
    <h1 class = "titre">Bibliothèque des geeks</h2>
    <h2 class="centeredtop">Connexion</h2>
    <form method="post" action="" class="centered">
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" name="username" id="username" required><br><br>
      <label for="password">Mot de passe:</label>
      <input type="password" name="password" id="password" required><br><br>
      <input type="submit" name="submit" value="Se connecter">
      </form>

    <?php
    // Vérification des informations de connexion
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Vérifier si le nom d'utilisateur et le mot de passe sont corrects
      if ($username == "utilisateur" && $password == "mdp") {
        echo "Connexion réussie.";
      } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
      }
    }
    ?>
  </body>
</html>
