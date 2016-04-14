<?php

class Changepassword_modele extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function modification() {
        $login = $this->input->post('login');
        $data = array(
            'password' => MD5($this->input->post('password'))
        );
        
        $this->db->where('login', $login);
        $query = $this->db->get('utilisateur');
        if ($query -> num_rows() > 0 && $this->input->post('login') != $this->db->where('login', $login)) {
            
            echo "<p style='text-align: center'>Votre mot de passe a bien été modifié !</p>";
            return $this->db->update('utilisateur', $data, 
                    array('login' => $login));
        }
        
        else{
            echo "<p style='text-align: center'>Login incorrect, veuillez réessayer.</p>";   
        }
    }
}


