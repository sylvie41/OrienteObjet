<?php



		require 'Personne.php';

			//PERSO 1
			$lucie = new Personne ("Lucie");
			$lucie->setAdresse("St Herblain");
			$lucie->setNaissance("18/04/1989");

			$lucie->personne();
			$lucie->age();

			//PERSO 2
			$baptiste = new Personne ("Baptiste");
			$baptiste->setAdresse("Nantes");
			$baptiste->setNaissance("21/01/2017");

			$baptiste->personne();
			$baptiste->age();


?>
