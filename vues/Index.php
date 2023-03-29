<!DOCTYPE html>
<html lang="fr">
  <head>
  <link rel="stylesheet" href="../assets/css/style.css">
    <title>Page de connexion</title>
  </head>
  <body>

    <h1 class="titre">Bibliothèque des geeks</h1>
    <h2 class="centeredtop">Connexion</h2>
    <form method="post" action="../model/logConnexion.php" class="centered">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required><br><br>
        <label for="role">Role:</label>
        <input type="text" name="role" id="role"><br><br>
        <button type="submit" class="info-btn">Se connecter</button>
      </form>
  </body>
</html>
