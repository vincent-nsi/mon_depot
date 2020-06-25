<?php
// connexion à la base de données
$base = new PDO( 'mysql:host=localhost;dbname=mon_site','administrateur','secret007');

// Préparation des variables
$variables = array($_POST["pseudo"], $_POST["mot_passe"]);

// Préparation de la requete
$requete = " INSERT INTO utilisateurs(pseudo,mot_de_passe) VALUES( ? , ? ) ";

// Envoie de cette requete à la base en préparation
$envoie = $base -> prepare($requete);

// Exécution de la requête avec les variables
$envoie -> execute($variables);

/*  Autre méthode pour la requête

// Préparation de la requete en incluant directement les variables
$requete = " INSERT INTO utilisateurs(pseudo, mot_de_passe) VALUES(' " . $_POST["pseudo"] . ",". $_POST["mot_passe"] ." ') ";

// Envoie de la requete à la base
$reponse = $base -> query($requete);
*/

?>
<!DOCTYPE html>
<html>
    <head>
    <meta content="text/html" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Mon site Web</title>
    </head>
    <body>
    <h1>Inscription</h1>
      <?php 
      // affichage d'accueil
      print("Bienvenu sur mon site : ".$_POST["pseudo"]."<br>");
      print("Vous avez choisis le mot de passe : ".$_POST["mot_passe"]);
      ?>
    </body>
</html>