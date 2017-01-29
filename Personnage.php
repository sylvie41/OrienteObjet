<?php
	class Personne {

		public $nom;
		public $prenom;
		public $adresse;
		public $naissance;
	


		public function __construct($prenom){
			$this->prenom=$prenom;
		    }
	
		//Affichages des infos
		public function personne(){
			echo "prénom: " .$this->prenom.
			"<br> nom: " .$this->nom.
			"<br> adresse: " .$this->adresse.
			"<br> Date de naissance: " .$this->naissance.
			"<br>";
		    }

		//Modification Adresse
		public function setAdresse($adresse){
			$this->adresse = $adresse;
		    }
		
		//Modification Naissance
		public function setNaissance($naissance){
			$this->naissance = $naissance;
		    }

		//Age
		public function age() {
			$age = date('Ym',strtotime ("now")) - date('Ym',strtotime ($this->naissance));
			echo substr($age,0 , 2);
		    }
	}

?>
