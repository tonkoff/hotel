<?php

class Reservations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Reservations_collections');
    }

    public function index()
    {
        $viewData = array();

        $reservations = $this->Reservations_collections->get_reservations();

        $viewData['reservations'] = $reservations;


        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('reservations/list', $viewData);
        $this->load->view('footer');
    }
}