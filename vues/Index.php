<?php
require_once 'vues/Index.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page de connexion</title>
  </head>
  <body>
    <h2>Connexion</h2>
    <form method="post" action="../controller/IndexController.php">
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" name="username" id="username" required><br><br>
      <label for="password">Mot de passe:</label>
      <input type="password" name="password" id="password" required><br><br>
        <label for="password">Role:</label>
        <input type="password" name="password" id="password" required><br><br>
      <input type="submit" name="submit" value="Se connecter">
    </form>
  </body>
</html>
