<?php
class Animal{

	protected function deplacement(){

		return 'je me déplace <br>';
	}
	public function manger(){
		
		return 'je mange <br>';
	}
}
//----------------------------------------
class Elephant extends Animal{

	public function quiSuisJe(){

		return 'Je suis un Elephant et ' . $this->deplacement() . '<br>';
		//On utilise la fonction deplacement() issue de ma classe Animal par heritage et qui est 'protected'. Et cette fonction protected est UNIQUEMENT exécutable dans le parent (la class Animal) ou dans l'enfant (la Class Elephant). Je n'utilise pas Animal:: seulement dans le cas où je l'aurais redéfinir.
	}
}
//----------------------------------------
class Chat extends Animal{

	public function quiSuisJe(){

		return 'Je suis un Chat <br>';
	}
	public function manger(){ //Redéfinition de la méthode, ici, manger()

		return 'Je mange comme un chat <br>';
	}
}
//-------------------------------------------------------------------------------------------
$elephant1 = new Elephant;
echo 'elephant : ' . $elephant1->manger() ; 
echo 'elephant : ' . $elephant1->quiSuisJe();
//echo $elephant1->deplacement(); // Erreur, j'hérite bien de la méthode deplacement() mais je ne peux faire appel à elle que DANS UNE CLASSE !!

//----------------------------------
$chat1 = new Chat;
echo 'chat : ' . $chat1->manger() ;
//L'interpreteur cherche d'abord dans la classe Chat, et SEULEMENT SI la methode n'exisait pas il aurait cherché la méthode dans la classe dont j'hérite.











