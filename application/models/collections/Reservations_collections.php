<?php

class Reservations_collections extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_reservations()
    {
         $this->db->select('reservations.*, CONCAT( clients.first_name, clients.last_name) as name');
         $this->db->from('reservations');
         $this->db->join('clients', 'reservations.client_id = clients.id' );
         $querry = $this->db->get();
        return $querry->result();
    }
}