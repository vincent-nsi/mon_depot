<?php
// protection de la page
session_start();
//var_dump($_SESSION);
if (!isset($_SESSION['valide']) or ($_SESSION['valide']!="ok"))
	{
	print("accès interdit");
	exit;
	}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta content="text/html" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Mon site Web</title>
    </head>
    <body>
    <h1>Surprise !!</h1>
      
    </body>
</html>
