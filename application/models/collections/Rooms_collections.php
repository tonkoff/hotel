<?php

class Rooms_collections extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
     }

    public function get_rooms()
    {
        $querry = $this->db->get('rooms');
        return $querry->result();
    }

    public function get_available_rooms($check_in, $check_out)
    {
        $querry = $this->db->query("SELECT *
                FROM rooms
                WHERE rooms.id NOT IN
                (SELECT room_id 
                 FROM reservations
                 WHERE
                   (check_in <= '{$check_in}' AND check_out >= '{$check_in}') OR
                   (check_in <= '{$check_out}' AND check_out >= '{$check_out}') OR
                   (check_in >= '{$check_in}' AND check_out <= '{$check_out}'))");


        return $querry->result();
    }


    public function get_one_room($id)
    {
        $query = $this->db->get_where('rooms', array('id'=> $id));

        return $query->result();
    }


    public function dateDiff($start, $end) {
        $start_ts = strtotime($start);
        $end_ts = strtotime($end);
        $diff = $end_ts - $start_ts;
        return round($diff / 86400);
    }

}