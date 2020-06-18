<?php

class Admin_home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');

        $cek  = $this->session->userdata('login');
        if( empty($cek) ){
            redirect('');
        }
    }

    public function index()
    {
        $user     = $this->session->userdata('login');
        $kontak   = $this->Model_admin->getKontak(); 

        $data   = [
                    'title'     => 'Dashboard Admin', 
                    'user'      => $user['fullname'],
                    'kontak'    => $kontak
                ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/home');
    }


}