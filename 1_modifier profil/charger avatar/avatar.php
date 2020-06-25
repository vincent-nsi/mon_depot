<!DOCTYPE html>
<html>
    <head>
    <meta content="text/html" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Mon site Web</title>
    </head>
<body>
    <h1>Avatar</h1>
<?php
    $destination = "images/mon_avatar.png";
	if (move_uploaded_file($_FILES['avatar']['tmp_name'],$destination)) {

	// connexion à la base de données
	$base = new PDO('mysql:host=localhost;dbname=mon_site', 'administrateur', 'secret007');

	// Préparation des variables
	$variables = array($_POST["pseudo"], $_POST["mot_passe"]);

	// Préparation de la requete
	$requete = "UPDATE utilisateurs SET avatar = 1 WHERE  pseudo = ? AND mot_de_passe = ? ";

	// Envoie de cette requete à la base en préparation
	$reponse = $base -> prepare($requete);

	// Exécution de la requête avec les variables,
	$reponse -> execute($variables);

	
		print("Le fichier est copié correctement.");
	}
	else {
		print("Il y a eu une erreur dans la copie de l'image");
	}
?>
    </body>
</html>




