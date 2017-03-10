<?php

class Clients_collection extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_clients()
    {
        $querry = $this->db->get('clients');
        return $querry->result();
    }

    public function get_login_client($username)
    {
        $query = $this->db->get_where('clients', array('username'=> $username));
        return $query->result();
    }
}