<?php
class Reservations_modele extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
       
          public function getReservation2($login)
        {
        $this->db->select('*');
          $this->db->from('utilisateur');
          $this->db->join('reservation', 'reservation.idClient = utilisateur.idUtil'); 
         $this->db->where('login',$login);

          
              $query = $this->db->get();
        return $query->result_array();
        
        }
        
        public function getReservation($id) {
        
        $query = $this->db->get_where('reservation', array('idClient' => $id));
        return $query->result_array();
    }
    
    public function getReservationUser($idUtil) {
        $this->db->where('idClient', $idUtil);
        $query = $this->db->get('reservation');
        
        if ($query->num_rows() > 0){
            return $query->result_array();
        }
        
        $reserv = $this->db->get_where('reservation', array('idClient' => $idUtil));
        return $reserv->result_array();
    }
            
        public function setReservation($Reserv) {
            $data = array(
                'Date_Arrivee' => $this->input->post('newDateArriv'),
                'Nb_Personnes' => $this->input->post('newNbPers'),
                'Menage' => $this->input->post('newMenage'),
                'EtatReservation' => "En attente",
                'Date_Depart' => $this->input->post('newDateDep'),
                'restauration' => $this->input->post('newresto')
                );

            $this->db->where('idReserv', $Reserv);
            $this->db->update('reservation', $data);
            }
        
            
       public function insertReservation($id) {
        $idReserv = rand(10, 1000);
        $data = array(
            'idReserv' => $idReserv,
            'Date_Arrivee' => $this->input->post('dateArriv'),
            'Nb_Personnes' => $this->input->post('NbPers'),
            'Menage' => $this->input->post('Menage'),
            'EtatReservation' => "En attente",
            'idClient' => $id,
            'Date_Depart' => $this->input->post('dateDep'),
            'restauration' => $this->input->post('Resto')
        );

        return $this->db->insert('reservation', $data);
    }
        
        public function suppReservation($id) {
            $this->db->where('idReserv', $id);
            $this->db->delete('reservation');
        }
}
        
        
       

