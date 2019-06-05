<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 28/05/19
 * Time: 14:52
 */

namespace controller;

class CompetenceAdminController
{
    /**
     * @var \model\CompetenceEntityRepository $skills
     */
    private $db;

    /**
     * CompetenceAdminController constructor.
     */
    public function __construct(){
        $e = new Error;
        $this->db = new \model\CompetenceEntityRepository;
    }

    public function index()
    {
        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $competences = $this->db->selectAll($orderby);

        include '../view/admin/index.php';
    }
}
