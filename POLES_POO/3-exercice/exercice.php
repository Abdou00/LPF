<?php
class Vehicule
{
	private $litresEssence;

	public function setLitresEssence($litre){
		if( is_int($litre) ){
			$this->litresEssence = $litre;
		}
	}
	public function getLitresEssence(){

		return $this->litresEssence;
	}
}
//-------------------------------------------------
class Pompe
{
	private $litresEssence;

	public function setLitresEssence($litre){
		if( is_int($litre) ){
			$this->litresEssence = $litre;
		}
	}
	public function getLitresEssence(){

		return $this->litresEssence;
	}
	public function donnerEssence(Vehicule $v){ //On exige un argument de type Vehicule

		$this->setLitresEssence( $this->getLitresEssence() - (50 - $v->getLitresEssence() )   );
		// $v représente le véhicule reçu, $this représente le véhicule à partir de laquelle la méthode est appelée
		// 800 - ( 50 - 5 ) = 800 - 45 = 755 

		$v->setLitresEssence( $v->getLitresEssence() + ( 50 - $v->getLitresEssence() )  );
		// 5 + ( 50 - 5 ) = 5 + 45 = 50
	}
}
//-------------------------------------------------------------------------
// -1- 
$vehicule1 = new Vehicule;
// -2-
$vehicule1->setLitresEssence(5);
// -3-
echo "Le véhicule1 possède : " . $vehicule1->getLitresEssence() . " Litres d'essence <br>";

// -4- 
$pompe1 = new Pompe;
// -5-
$pompe1->setLitresEssence(800);
// -6-
echo "La pompe possède : " . $pompe1->getLitresEssence() . " Litres d'essence <br>";

// -7- 
$pompe1->donnerEssence($vehicule1);
// -8- 
echo 'Après ravitaillement, le véhicule1 possède : ' . $vehicule1->getLitresEssence() . ' litres d\'essences<br>';
// -9-
echo 'Aprés ravitaillement, la pompe possède : ' . $pompe1->getLitresEssence() . ' litres d\'essence<br>';

//---------------------------------------
$vehicule2 = new Vehicule;
$vehicule2->setLitresEssence(30);
echo 'Le véhicule2 possède : ' . $vehicule2->getLitresEssence() . ' litres d\'essences<br>';

$pompe1->donnerEssence($vehicule2);
echo 'Après ravitaillement, le véhicule2 possède : ' . $vehicule2->getLitresEssence() . ' litres d\'essences<br>';
// -9-
echo 'Aprés ravitaillement, la pompe possède : ' . $pompe1->getLitresEssence() . ' litres d\'essence<br>';





