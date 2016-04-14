<?php

class Utilisateurs_modele extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function inscription() {
        $idUtilisateur = rand(10, 1000);

        $data = array(
            'idUtil' => $idUtilisateur,
            'login' => $this->input->post('login'),
            'password' => MD5($this->input->post('password')),
            'Nom' => $this->input->post('Nom'),
            'Prenom' => $this->input->post('Prenom'),
            'Admin' => $this->input->post('Admin'));

        return $this->db->insert('utilisateur', $data);
    }

    public function getUtilisateur() {
        $query = $this->db->get('utilisateur');
        return $query->result_array();
    }

    public function get1utilisateur($log) {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('login', $log);
   
       $query= $this->db->get();
        
        return $query->result_array();
        
    }

    public function setUtilisateur($id) {

        //On recupere l'identifiant de l'utilisateur à modifier choisit  dans le tableau des utilisateurs.
        $data = array(
            'login' => $this->input->post('newLogin'),
            'password' => MD5($this->input->post('newPassword')),
            'Nom' => $this->input->post('newNom'),
            'Prenom' => $this->input->post('newPrenom'),
            'Admin' => $this->input->post('newAdmin')
        );
        $this->db->where('idUtil', $id);
        $this->db->update('utilisateur', $data);
    }

    public function suppUtilisateur($id) {

        $this->db->where('idUtil', $id);
        $this->db->delete('utilisateur');
    }

}
