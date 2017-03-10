<?php

class Clients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Clients_collection');
    }

    public function index()
    {
        $viewData = array();

        $clients = $this->Clients_collection->get_clients();

        $viewData['clients'] = $clients;


        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('clients/list', $viewData);
        $this->load->view('footer');
    }

}