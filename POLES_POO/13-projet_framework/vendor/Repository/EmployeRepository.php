<?php
//Cette classe contiendra les méthodes de 'Employe.php' et demandera l'exécution à EntityRepository

namespace Repository;

use Manager\EntityRepository; //L'utilisation du namespace permet d'extends la classe lors de l'heritage alors qu'il n'y a pas eu d'instanciation.

class EmployeRepository extends EntityRepository{

	public function getAllEmploye(){

		return $this->findAll(); // findAll() provient de EntityRepository
	}
	public function getFindEmploye($id){

		return $this->find($id); // find($id) provient de EntityRepository
	}
	public function registerEmploye(){

		return $this->register(); // register() provient de EntityRepository
	}
}













