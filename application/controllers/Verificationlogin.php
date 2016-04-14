<?php

class Verificationlogin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('connexion_modele','',TRUE);
    }

    public function index() {
        /* Cette méthode va vérifier la validation des informations 
         * d'identification de l'utilisateur
         */
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|callback_check_database', 'required'); 
        //'trim' = trimming (couper les champs)
      
        if($this->form_validation->run() == FALSE) {
            /* Chargement de la vue */
            /* Si validation échouée, l'utilisateur est redirigé vers la page de connexion */
            $this->load->view('cvven/connexion');
        }
        else {
            /* Sinon redirection vers la page d'accueil (uniquement pour les utilisateurs authentifiés) */
            redirect('home');
        }
    }
 
    public function check_database($password) {
       /* Validation réussie. Validation par rapport à la base de données */
       $login = $this->input->post('login');

       /* Interrogation de la base de données */
       $result = $this->connexion_modele->login($login, $password);

       if($result) {
           $sess_array = array();
          foreach($result as $row)
        {
           $sess_array = array(
             'idUtil' => $row->idUtil,
             'login' => $row->login
           );
           /* L'utilisateur est connecté */
           $this->session->set_userdata('logged_in', $sess_array);
        }
        return TRUE;
        }
        else {
            /* Message d'erreur si les données saisies sont incorrectes */
            $this->form_validation->set_message('check_database', 'Login ou mot de passe invalide, veuillez réessayer.');
            return FALSE;
        }
     }
   }
 

