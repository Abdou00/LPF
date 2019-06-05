<?php
//Un repository centralise tout ce qui touche à la récupération de vos entités. Concrètement, vous ne devez pas faire la moindre requête SQL ailleurs que dans un repository (c'est la règle)
//EntityRepository ne connait pas "employes" ou autre, il connait que des entités. Cela doit donc rester génériqeu afin que cela soit ré-utilisable.
namespace Manager;

//On utilise des 'use' lorsque l'on utilise des classes sans faire de 'new' directement dans le fichier courant.
use Manager\PDOManager; // On a besoin de PDOManager car en utilisant ce namespace, on a accès a tout ce qui est static de Manager\PDOManager. Le 'use' déclenche l'autoload pour que la classe soit chargée et ainsi éviter une erreur.

use PDO; // Nous utilisons ce namespace car on utilise les constantes et autres propriétés, function static de la classe PDO

class EntityRepository{

	private $db;
	public function __construct(){}

	public function getDb(){

		if( !$this->db ){

			$this->db = PDOManager::getInstance()->getPdo(); //getInstance() retourne un objet on peut odnc mettre une fleche pour appeler une méthode.
		}
		return $this->db;
	}

	private function getTableName(){

		return 'employes';
	}

	public function find($id){

		$q = $this->getDb()->query('SELECT * FROM ' . $this->getTableName() . ' WHERE id' . ucfirst($this->getTableName() ) . '= ' . (int) $id ); //id'Employe' le premier champ de notre table. Caster en 'int'  permet d'éviter des erreurs de requete SQL

		$q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\'. $this->getTableName() );
		//PDO::FETCH_CLASS : permet d'instancier un objet (dans notre cas: Entity\Employe)
		//setFetchMode() : permet de prendre les résultats de la requete et d'affecter les propriétés de l'objet. (Pour cela, il faut que l'ortographe des noms de colonnes (champs) correspondent aux propriétés de l'objet.)

		$r = $q->fetch();

		if( !$r ){
			return false;
		}
		else{
			return $r;
		}
	}

	public function findAll(){ //permet d'aller chercher toutes les informations sur un employe

		$q = $this->getDb()->query('SELECT * FROM '. $this->getTableName() );

		$q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this->getTableName() );


		$r = $q->fetchAll(); //On récupère un tableau Array composé d'objet

		if( !$r ){ //Si la requete ne fonctionne pas
			return false;
		}
		else{ //sinon on retourne les résultats
			return $r;
		}	
	}

	public function register(){

		$q = $this->getDb()->query('INSERT INTO '. $this->getTableName() . '(' . implode(',', array_keys($_POST) ) . ') VALUES (' . "'" . implode("','", $_POST) . "'"  . ')' );
		//array_keys me permet de parcourir les indices plutot que les valeurs pour annoncer les champs.

		return $this->getDb()->lastInsertId(); //dernier identifiant généré
	}
}













