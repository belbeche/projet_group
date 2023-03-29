<?php

$username = $_POST['username'];
$password = $_POST['password'];
// Vérification des informations de connexion
if (isset($_POST['submit'])) {
    // Vérifier si le nom d'utilisateur et le mot de passe sont corrects
    if ($username == "utilisateur" && $password == "mdp") {
        header("Location: home.php");
    } else {
        echo "<h1 class = center> Nom d'utilisateur ou mot de passe incorrect. <h1>";
    }
}