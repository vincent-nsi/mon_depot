<?php
// connexion à la base de données
$base = new PDO('mysql:host=localhost;dbname=mon_site', 'administrateur', 'secret007');

// Préparation des variables
$variables = array($_POST["pseudo"], $_POST["mot_passe"]);

// Préparation de la requete
$requete = " SELECT pseudo FROM utilisateurs WHERE pseudo = ? AND mot_de_passe = ? ";

// Envoie de cette requete à la base en préparation
$reponse = $base -> prepare($requete);

// Exécution de la requête avec les variables, le résultat étant stocké dans la variable $reponse
$reponse -> execute($variables);

/* Autre version
// Préparation des variables
$pseudo = $_POST["pseudo"]
$mot_passe = $_POST["mot_passe"]

// preparation de la requete
$requete = " SELECT pseudo FROM utilisateurs WHERE pseudo = '$pseudo' AND mot_de_passe = '$mot_passe' ";

// Envoie de cette requete à la base
$reponse = $base -> query($requete);
*/


?>
<!DOCTYPE html>
<html>
    <head>
    <meta content="text/html" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ma page SERVEUR</title>
    </head>
    <body>
    <h1>Bienvenue sur le serveur.</h1>
      <?php 
      // On affiche un message en fonction de la réponse de la base
      if ($donnees = $reponse -> fetch()){
			print("vous êtes bien identifé ".$donnees['pseudo']);
		}   		
	  else {
	  		print("Désolé ! Mais vous ne figurez pas dans la base de données.");
	  }	  
		// On ferme le parcours de la variable $reponse   
		$reponse -> closeCursor();

      ?>
    </body>
</html>