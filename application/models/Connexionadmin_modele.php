<?php

Class ConnexionAdmin_modele extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
           
    public function login($login, $password) {
        $this -> db -> select('idUtil, login, password');
        $this -> db -> from('utilisateur');
        $this -> db -> where('login', $login);
        $this -> db -> where('Admin',"OUI");
        $this -> db -> where('password', MD5($password)); //Sécurité du mot de passe
        $this -> db -> limit(1); //Nombre de résultat voulu
        
        $query = $this -> db -> get();
        
        if($query -> num_rows() == 1) {
            return $query->result();
        }
        else {
            return false;
       }
     }
   }

