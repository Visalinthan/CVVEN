<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inscription
 *
 * @author emma
 */
class Inscription extends CI_Controller {
    
    function __construct() {
      parent::__construct();
      $this->load->helper(array('form'));
      $this->load->model('Inscription_modele');
    }
    
    /* Inscription d'un Utilisateir */
    public function inscription() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('Nom', 'Nom', 'required');
        $this->form_validation->set_rules('Prenom', 'Prenom', 'required');
        $this->form_validation->set_rules('Admin', 'Admin', 'required');
       
        if ($this->form_validation->run() === FALSE) {
            /* Chargement de la vue */
            $this->load->view('cvven/formInscription');
           
        } else {
            $this->Inscription_modele->inscription();
            /* Chargement de la vue */
            $this->load->view('cvven/connexion');
        }
    }

   }
