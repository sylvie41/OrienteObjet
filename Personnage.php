<?php
class Personnage{

	public $nom;
	public $prenom;
	public $adresse;
	public $naissance;


	public function __construct(){
		his->nom = $nom;
		his->prenom = $prenom;
		his->adresse = $adresse;
		his->naissance = $naissance;
	}



	public function regenerer($vie = null){
		if(is_null($vie)){
			$this->vie = 100;
		}else{
			$this->vie = $this->$vie + $vie;
			// = $this->vie += $vie;
		}
	}

	public function mort(){
		return $this->$vie <= 0;
	}


	public function age($date)
	{
		list($jour, $mois, $annee) = explode ('/', $date);
		$TSN = strtotime($annee."/".$mois."/".$jour);
		$TS = strtotime(date("Y/m/d"));
		 
		$Age = ($TS-$TSN)/(365*3600*24);
		echo round($Age);			
	}




}
