<?php

class Inscription_modele extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function inscription() {
        $idUtilisateur = rand(10, 1000);
        $data = array(
            'idUtil' => $idUtilisateur,
            'Login' => $this->input->post('login'),
            'Password' => MD5($this->input->post('password')),
            'Nom' => $this->input->post('Nom'),
            'Prenom' => $this->input->post('Prenom'),
            'Admin' => "Non"  
        );
        
        echo "<p style='text-align: center'>Inscription réussie ! Vous pouvez désormais vous connecter.</p>";
        return $this->db->insert('utilisateur', $data);
    }
}
