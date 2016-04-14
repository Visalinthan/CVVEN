<?php

class ConnexionAdmin extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    /* Connexion Admin */
    public function index() {
        $this->load->helper(array('form'));
        /* Chargement de la vue */
        $this->load->view('cvven/connexionAdmin');
        
    }
}

