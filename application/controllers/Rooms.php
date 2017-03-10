<?php

class Rooms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Rooms_collections');
    }

    public function index()
    {
        $viewData = array();

        $rooms = $this->Rooms_collections->get_rooms();

        $viewData['rooms'] = $rooms;

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('rooms/list', $viewData);
        $this->load->view('footer');
    }


    public function book()
    {

        $errors = array();
        $viewData = array();
        $viewData['errors'] = $errors;

        if(isset($_POST['submit'])) {

            $room = $this->Rooms_collections->get_one_room($_GET['id']);

            $room_per_night = $room[0]->room_price;

            $days = $this->Rooms_collections->dateDiff($_POST['check_in'], $_POST['check_out']);

            $total_price = $room_per_night * $days;


            $data = array(
                'check_in' => $_POST['check_in'],
                'check_out' => $_POST['check_out'],
                'room_id'   => $_GET['id'],
                'client_id' => $_SESSION['client']['client_id'],
                'special_request' => $_POST['special_request'],
                'booking_time'    => date("Y-m-d H:i:s"),
                'total_cost'      => $total_price,
                'status'         => 'paid',
            );



            $this->db->insert('reservations', $data);

            redirect(base_url('index.php'));

        }

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('reservations/book', $viewData);
        $this->load->view('footer');
    }

}