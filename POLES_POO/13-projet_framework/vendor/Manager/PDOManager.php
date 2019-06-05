<?php
//Cette classe represente la connexion à la BDD. L'approche Singleton nous permettra d'etre certain qu'il n'y ait pas plusieurs connexions initialisées.
namespace Manager;

class PDOManager{

	private static $instance = null; //contiendra l'instance de notre classe
	protected $pdo; // contiendra l'instance PDO

	private function __construct(){}
	private function __clone(){}

	public static function getInstance(){

		//Si on a pas encore instancié notre classe
		if( is_null(self::$instance) ){
			self::$instance = new self; //revient à faire un new PDOManager
		}
		return self::$instance; //on retourne toujours le même objet (avec la référence [1])
	}

	public function getPdo(){

		include __DIR__ . '/../../app/Config.php'; // On ressort pour se diriger au bon endroit

		$config = new \Config(); //Config a été déclaré sans namespace dans l'espace global, d'où l'utilisation du '\' devant Config()

		$connect = $config->getParametersConnect(); //On récupère les paramètres de connexion à travers la config

		try{

			$this->pdo = new \PDO("mysql:dbname=". $connect['dbname'] . ";host=". $connect['host'], $connect['user'], $connect['password'], array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION) );
			//PDO est une classe existante déclaré dans l'espace global d'où là encor el'utilisation du '\'

		}
		catch(\PDOException $e){ //PDOExecption est une classe existante déclaré dans l'espace global d'où là encor el'utilisation du '\'
			echo 'La connexion a échoué : ' .$e->getMessage();

		}
		return $this->pdo;
	}
}










