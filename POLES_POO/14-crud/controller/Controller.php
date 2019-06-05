<?php

namespace controller;

class Controller{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepository;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$op = isset( $_GET['op'] ) ? $_GET['op'] : NULL;

		try{
			if( !$op || $op == 'list'){
				$this->listContacts();
			}
			elseif( $op == 'new'){
				$this->saveContact();
			}
			elseif( $op == 'delete' ){
				$this->deleteContact();
			}
			elseif( $op == 'show'){
				$this->showContact();
			}
			else{
				$this->showError("Page not found", "Page for operation ". $op ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listContacts(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$contacts = $this->db->selectAll($orderby);

		include 'view/contacts.php';
	}
	//-------------------------------------------------
	public function saveContact(){

		$title = 'Add new contact';

		$prenom ='';
		$nom ='';
		$sexe ='';
		$service ='';
		$date_embauche ='';
		$salaire ='';

		if( $_POST) {

			$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
			$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
			$sexe = isset($_POST['sexe']) ? $_POST['sexe'] : NULL;
			$service = isset($_POST['service']) ? $_POST['service'] : NULL;
			$date_embauche = isset($_POST['date_embauche']) ? $_POST['date_embauche'] : NULL;
			$salaire = isset($_POST['salaire']) ? $_POST['salaire'] : NULL;

			try{

				$res = $this->db->insert();
				$this->redirect('index.php');
				return;
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}
		include 'view/contact-form.php';
	}

	//-------------------------------------------------
	public function deleteContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( !$id ){

			throw new Exception('Internal error.');
		}
		$res = $this->db->delete($id);

		$this->redirect('index.php');
	}

	//-------------------------------------------------
	public function showContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( ! $id ){

			throw new Exception('Internal error.');
		}
		$contact = $this->db->select($id);

		include 'view/contact.php';
	}
}