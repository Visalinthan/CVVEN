<?php

class VerificationloginAdmin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('connexionadmin_modele','',TRUE);
    }

    public function index() {
        /* Cette méthode va vérifier la validation des informations 
         * d'identification de l'Admin
         */
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login' , 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|callback_check_database', 'required'); 
        //'trim' = trimming (couper les champs)
      
        if($this->form_validation->run() == FALSE) {
            /* Si validation échouée, l'Admin est redirigé vers la page de connexion */
            /* Chargement de la vue */
            $this->load->view('cvven/connexionAdmin');
        }
        else {
            /* Sinon redirection vers la page d'accueil Admin */
            redirect('Admin');
        }
    }
 
    public function check_database($password) {
       /* Validation réussie. Validation par rapport à la base de données */
       $login = $this->input->post('login');
   
       /* Interrogation de la base de données */
       $result = $this->connexionadmin_modele->login($login, $password);

       if($result) {
           $sess_array = array();
          foreach($result as $row)
        {
           $sess_array = array(
             'idUtil' => $row->idUtil,
             'login' => $row->login,
              
           );
           /* L'Admin est connecté */
           $this->session->set_userdata('admin_logged_in', $sess_array);
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
