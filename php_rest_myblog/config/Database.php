<?php 
  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'tripsort';
    private $username = 'samba';
    private $password = 'Abdoulaye@92vlg';
    private $connexion;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'connexion Error: ' . $e->getMessage();
      }

      return $this->connexion;
    }
  }