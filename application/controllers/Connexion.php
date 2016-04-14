<?php

class Connexion extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    /* Connexion utilisateur */
    public function index() {
        $this->load->helper(array('form'));
        /* Chargement de la vue */
        $this->load->view('cvven/connexion');
        
    }
}
