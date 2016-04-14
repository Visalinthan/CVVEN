<?php

class Changepassword extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
    }
    
    /* Changement du mot de passe utilisateur */
    public function password() {
        $this->load->model('changepassword_modele');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
       
        if ($this->form_validation->run() === FALSE) {
            /* Chargement de la vue */
            $this->load->view('cvven/changePassword');
        } 
    
        if($this->form_validation->run() === TRUE) {
            $this->changepassword_modele->modification();
            /* Chargement de la vue */
            $this->load->view('cvven/password');
        }
        
    }
            
}
    
