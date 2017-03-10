<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Clients_collection');
    }


    public function index()
    {

        var_dump($_SESSION);


        if(isset($_POST['submit'])) {
            if(strlen($_POST['username']) <3 || strlen($_POST['username']) > 50) {
                $errors['credentials'] = 'Wrong Credentials';
            }

            if(strlen($_POST['password']) <3 || strlen($_POST['password']) > 50) {
                $errors['credentials'] = 'Wrong Credentials';
            }

            if(empty($errors)) {
                $client = $this->Clients_collection->get_login_client(trim($_POST['username']));

                if(!empty($client)) {
                    if($client[0]->password == sha1(trim($_POST['password']))) {



                        $newdata = array(
                            'client_id'     => $client[0]->id,
                            'first_name'    => $client[0]->first_name,
                            'last_name'     => $client[0]->last_name,
                            'username'      => $client[0]->username,
                            'phone'         =>  $client[0]->phone ,
                            'email'         =>  $client[0]->email,
                            'logged_in'     => TRUE
                        );
                        $this->session->set_userdata('client',$newdata);
                        redirect(base_url('index.php'));
                    } else {
                        $errors[] = 'Wrong credentials';
                    }
                }   else {
                    $errors[] = 'Wrong credentials';
                }
            }
        }

        if($this->is_logged->is_logged_in()) {
            redirect(base_url('index.php'));
        } else {
            $errors = array();
            $viewData = array();
            $viewData['errors'] = $errors;
            $this->load->view('login/login', $viewData);
        }

    }

    public function logout() {

        $this->session->sess_destroy();
        unset(
            $_SESSION['user']

        );

       redirect(base_url('index.php/login'));
    }
}