<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
 }
 
 /* Session Admin */
 public function index() {
    if($this->session->userdata('admin_logged_in')) {
         $session_data = $this->session->userdata('admin_logged_in');
         $data['login'] = $session_data['login'];
         /* Chargement de la vue */
         $this->load->view('cvven/homeAdmin', $data);
     }

     else {
        /* Si aucune session, redirection vers la page de connexion Admin */
        redirect('connexionAdmin', 'refresh');
     }
 }
 
 /* Déconnection */
 public function deconnexion() {
     $this->session->unset_userdata('admin_logged_in');
     session_destroy();
     redirect('connexionAdmin', 'refresh');
     
 }
 
}

