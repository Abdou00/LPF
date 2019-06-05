<?php

namespace model;

class EntityRepository{

	private $db;
	private $table;
	public function __construct(){}

	public function getDb(){

		if( !$this->db){

			try{
				$xml = simplexml_load_file('app/config.xml');
				$this->table = $xml->table;

				try{
					$this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION) );
				}
				catch(\PDOException $e){
					die("Probleme  de connexion bdd : " . $e->getMessage() );

				}
			}
			catch(Exception $e){
				die("Probleme de fichier de congif xml");
			}
		}
		return $this->db;
	}
	//-----------------------------------------
	public function selectAll(){

		$q = $this->getDb()->query('SELECT * FROM ' . $this->table );

		$r = $q->fetchAll(\PDO::FETCH_OBJ);
		if( !$r ){
			return false;
		}
		else{
			return $r;
		}
	}
	//-----------------------------------------
	public function select($id){

		$q = $this->getDb()->query('SELECT * FROM ' . $this->table . ' WHERE id_' . $this->table . ' = ' . (int) $id );

		$r = $q->fetch(\PDO::FETCH_OBJ);
		if( !$r ){
			return false;
		}
		else{
			return $r;
		}
	}
	//-----------------------------------------
	public function delete($id){

		$q = $this->getDb()->query('DELETE FROM ' . $this->table . ' WHERE id_' . $this->table . ' = ' . (int) $id );
	}
	//-----------------------------------------
	public function insert(){

		$q = $this->getDb()->query('INSERT INTO ' . $this->table . '(' . implode(',', array_keys($_POST) ) . ') VALUES (' . "'" . implode("','", $_POST) . "'" . ')'  );

		return $this->getDb()->lastInsertId();
	}

}









