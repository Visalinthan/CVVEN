<?php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
           $this->load->model('Reservations_modele');
        $this->load->model('Utilisateurs_modele');
 }
 
 /* Session Utilisateur */
 public function index() {
    if($this->session->userdata('logged_in')) {
         $session_data = $this->session->userdata('logged_in');
         $data['login'] = $session_data['login'];
         /* Chargement de la vue */
          $this->load->helper(array('form', 'url'));
           $this->load->helper('form');
         $data['reserv']=$this->Reservations_modele->getReservation2($data['login']);
         $this->load->view('cvven/home', $data);
     }

     else {
        /* Si aucune session, redirection vers la page de connexion Utilisateur */
        redirect('connexion', 'refresh');
     }
 }
 
 /* Déconnection */
 public function deconnexion() {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('connexion', 'refresh');
     
 }
 
}
 