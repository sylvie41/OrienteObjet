<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

		<?php
		require 'Personnage.php';


		$lucie = new Presonnage("Lucie");
		$lucie->nom = Perrault;
		$lucie->adresse = St Herblain;
		$lucie->naissance = 18/04/1989;

		$age = (time() - strtotime($naissance)) / 3600 / 24 / 365;

		$baptiste = new Personnage("Baptiste");
		$lucie->nom = Auriac;
		$lucie->adresse = Nantes;
		$baptiste->naissance = 21/01/2015

		var_dump($lucie->nom);
		?>



</body>
</html>

