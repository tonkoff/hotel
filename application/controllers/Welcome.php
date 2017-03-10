<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Rooms_collections');

        if(!$this->is_logged->is_logged_in()) {
            redirect(base_url('index.php/login'));
        }
    }


    public function index()
	{

        $viewData = array();

	    $check_in = (isset($_GET['check_in'])) ? $_GET['check_in'] : '';
        $check_out = (isset($_GET['check_out'])) ? $_GET['check_out'] : '';
        $rooms = $this->Rooms_collections->get_available_rooms($check_in, $check_out);

        $viewData['rooms'] = $rooms;
        $viewData['check_in'] = $check_in;
        $viewData['check_out'] = $check_out;



		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard', $viewData);
		$this->load->view('footer');
	}


}
