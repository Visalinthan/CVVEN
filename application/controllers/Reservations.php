<?php
class Reservations extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Reservations_modele');
        $this->load->model('Utilisateurs_modele');
    }


  public function formulaireReservationAdmin() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $data['utilisateur'] = $this->Utilisateurs_modele->getUtilisateur();
        $this->form_validation->set_rules('dateArriv', 'Date_Arrivee', 'required');
        $this->form_validation->set_rules('NbPers', 'Nb_Personnes', 'required');
        $this->form_validation->set_rules('Menage', 'Menage', 'required');

        $this->form_validation->set_rules('dateDep', 'Date_Depart', 'required');
        $this->form_validation->set_rules('Resto', 'restauration', 'required');


        if ($this->form_validation->run() == FALSE) {
            /* Chargement de la vue */
            $this->load->view('cvven/AjouterReservation', $data);
        } else {
            $this->Reservations_modele->insertReservation();
            /* Chargement de la vue */
            $this->load->view('cvven/succesReservationAdmin', $data);
        }
    }
    
    /* Méthode listeUtilisateur(): appelle la vue GererUtilisateur.php permettant de gérer les utilisateurs :
    /* le bouton 'voir ses réservations' lance  la methode afficher() permettant de gerer les Reservations. */
    /* Grâce a la fonction anchor() 3 liens ont été creer */
    /* le lien ajouter un Utilisateur,lance la méthode inscription() : AjouterUtilisateur.php  */
    /* le lien Modifier un Utilisateur, lance la méthode modificationUtilisateur() */
    /* le lien supprimer un Utilisateur, lance la méthode supprimerUtilisateur() */
    
     

 public function supprimer(){
             $this->load->helper(array('form', 'url'));
           $this->load->helper('form');
          $id2=  $this->input->post('idReserv'); 
          
          
          $this->Reservations_modele->suppReservation($id2);
          echo '<script> alert("La reservation a bien été suprimé") </script>';
         
          redirect('/home', 'refresh');
      }

    public function listeUtilisateur() {
        $this->load->helper('form');
        $this->load->model('Utilisateurs_modele');
        
        $data['utilisateur'] = $this->Utilisateurs_modele->getUtilisateur();

        /* Chargement de la vue */
        $this->load->view('cvven/gererUtilisateur', $data);
    }
    
    /* Methode permettant d'insérer un nouvel utilisateur dans la table utilisateur */
    public function inscription() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('Nom', 'Nom', 'required');
        $this->form_validation->set_rules('Prenom', 'Prénom', 'required');
        $this->form_validation->set_rules('Admin', 'Admin', 'required');
        
        /* Chargement de la vue */
        $this->load->view('cvven/AjouterUtilisateur');
        
        /* Si l'Admin clique sur le bouton nommé 'enregistrer', un message informant le
         * succès de l'inscription de l'utilisateur s'affiche
         */
        $validersinsrip = $this->input->post('enregistrer');
        if ($validersinsrip) {
            echo "<p style='text-align: center'>Votre inscription a bien été enregistré !</p>";
            /* On appelle la méthode inscription() qui permet d'inscrire un utilisateur */
            $this->Utilisateurs_modele->inscription();
        }
       
    }
    
    /* Méthode permettant de modifier un utlisateur
     * Cette méthode fait appelle à la vue modifierUtilisateur
     */
    public function modificationUtilisateur() {
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('identifiant');
        $data['utilisateur'] = $this->Utilisateurs_modele->getUtilisateur();

        /* Chargement de la vue */
        $this->load->view('cvven/modifierUtilisateur', $data);

        $validermodif = $this->input->post('valider');
        
        /* Si l'Admin clique sur le bouton nommé 'valider', un message informant
         * le succès de la modification s'affiche
         */
        if ($validermodif) {
            echo "<p style='text-align: center'>L'utilisateur n°" . $id = $this->input->post('modifid') . "a été modifié !</p>";
             /* On appelle la méthode setpUtilisateur() qui permet de modifier un utilisateur
              * et on lui donne comme paramètre : $id  */
            $this->Utilisateurs_modele->setUtilisateur($id);
        }
    }
    
    /* Methode permetant de supprimer un utlisateur 
     * Cette méthode fait appelle à la vue supprimerUtilisateur */
    public function supprimerUtilisateur() {
        $this->load->helper(array('form', 'url'));
        $data['titre'] = "Selectionnez l'utilisateur à supprimer";
        $data['utilisateur'] = $this->Utilisateurs_modele->getUtilisateur();
        
        /* Chargement de la vue */
        $this->load->view('cvven/supprimerUtilisateur', $data);

        /* Si l'utilisateur clique sur le bouton 'valider2' après avoir choisi l'utilisateur à supprimer */
        $validersupp = $this->input->post('valider2');
        if ($validersupp) {
            /* Un message  affiche l'ID de l'utisateur supprimé.
               Dans la variable $id on stock l'id de l'utilisateur choisit */
            echo "<p style='text-align: center'>L'utilisateur n°" . $id = $this->input->post('idSupprimer') . "a été supprimé !</p>";
            /* On appelle la méthode suppUtilisateur() qui permet de supprimer un utilisateur
             * et on lui donne comme paramètre : $id  */
            $this->Utilisateurs_modele->suppUtilisateur($id);
        }
    }
    
    /* Méthode qui permet d'afficher la liste des réservations d'un utilisateur : 
     * cette méthode est appellée lorsque l'Admin clique sur le bouton "Consulter ses reservations " grâce 
     * à la fonction "form_open(reservation/afficher)"
     * Cette méthode fait appelle à la vue GererReservations
     */
    public function afficherReservations(){
        $id = $this->input->post('identifiant');
        $data['num'] = $id;

        $data['reserv']=$this->Reservations_modele->getReservation($id);

    /*Chargement de la vue */
    $this->load->view('cvven/gererReservation',$data);
   

    }
    
    /* Méthode qui permet d'afficher la liste des réservations d'un utilisateur : 
     * cette méthode est appellée lorsque l'utilisateur saisi son ID"
     * Cette méthode fait appelle à la vue afficherReservation
     */
    public function afficherReservationsUser(){
        $idUtil = $this->input->post('idUtil');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['reserv']=$this->Reservations_modele->getReservationUser($idUtil);
        
        $afficher = $this->input->post('afficher');
        
        /* Si l'utilisateur clique sur le bouton 'afficher' et qu'il n'a saisi son ID,
         * un message lui indiquant de le saisir s'affiche */
        if (($afficher) && empty($idUtil)) {
            echo "<p style='text-align: center'>Merci de saisir votre ID !</p>";
        }

    /*Chargement de la vue */
    $this->load->view('cvven/afficherReservation',$data);

    }
    
    
    /* Methode qui permet à l'Admin d'ajouter une nouvelle reservation 
     * Cette méthode fait appelle à la vue ajouterReservation et succesReservationAdmin
     * quand une réservation a été affectué
     */
    public function formulaireReservationUser() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
         $session_data = $this->session->userdata('logged_in');
         $data['login'] = $session_data['login'];
        $data['utilisateur'] = $this->Utilisateurs_modele->get1Utilisateur($data['login']);
        $this->form_validation->set_rules('dateArriv', 'Date_Arrivee', 'required');
        $this->form_validation->set_rules('NbPers', 'Nb_Personnes', 'required');
        $this->form_validation->set_rules('Menage', 'Menage', 'required');
        $this->form_validation->set_rules('dateDep', 'Date_Depart', 'required');
        $this->form_validation->set_rules('Resto', 'restauration', 'required');
       
       
 
        if ($this->form_validation->run() == FALSE) {
            /* Chargement de la vue */
            $this->load->view('cvven/formReservation', $data);
        } else {
          $id = $this->input->post('idClient');
            $this->Reservations_modele->insertReservation($id);
            /* Chargement de la vue */
            
            $this->load->view('cvven/succesReservation', $data);
        }
    }
    
    /* Methode qui permet à l'utilisateur d'ajouter une nouvelle r�servation 
     * Cette méthode fait appelle à la vue formReservation et succesReservation
     * quand une réservation a été affectué
     */
  
    
    /* Methode qui permet à l'Admin de modifier une reservation
     * Cette méthode fait appelle à la vue modifierReservation
     */
    public function modificationReservation() {
        $this->load->helper(array('form', 'url'));
        $data['titre'] = "Modification de la réservation n°";
        
        $data['Client'] = $this->input->post('idClient');
        $data['id'] = $this->input->post('idReserv');
        
        /* Chargement de la vue */
        $this->load->view('cvven/modifierReservation', $data);

        /* Si l'Admin clique sur le bouton Enregister que nous avons nomm�  'ok' */
        $validermodif = $this->input->post('ok');
        if ($validermodif){
            /* On recupere l'idClient et l'idReservation de la reservation à modifier et on les stocke 
             * dans $Client et $Reserv  */
            $Reserv = $this->input->post('idReserv'); 
            $this->Reservations_modele->setReservation($Reserv);
            /* Un message s'afficher informant l'Admin de la modification de la réservation */
           // echo "<p style='text-align: center'>La réservation n°" . $Reserv . " a été modifié !</p>";
            echo 'alert(La réservation n°'. $Reserv .' a été modifié !)';
            /* On appelle la méthode setReservation qui permet de modifier une reservation. */
           
             redirect('/Reservations/listeUtilisateur/', 'refresh');
        }
    }
    
    /* Methode qui permet à l'Admin de supprimer une reservation 
     * Cette méthode fait appelle à la vue supprimerrReservation
     */
    public function suppressionReserv() {
        $this->load->helper(array('form', 'url'));
        $this->load->model('Reservations_modele');
        
        /* Chargement de la vue */
        $this->load->view('cvven/supprimerReservation');
        
        $id2 = $this->input->post('idReservSupp');
        $valider2 = $this->input->post('validersupp');
        
        /* Si l'Admin a bien saisi l'id de la réservation a supprimer et qu'il clique
         * sur le bouton nommé 'valider2'
         */
        if (($valider2) && !empty($id2)) {
            /* Un message s'afficher informant l'Admin de la suppression de la réservation */
            echo "<p style='text-align: center'>La réservation n°" . $id2. " a été supprimé !</p>";
        }
            
            $this->Reservations_modele->suppReservation($id2);
     
        
    }
}
 