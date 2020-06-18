<?php

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_website');
    }

    public function index()
    {
        $data['judul']  = 'Profile';
        $data['profile'] = $this->Model_website->getProfile();
        $data['pegawai'] = $this->Model_website->getPegawai();

        $this->load->view('website/header', $data);
        $this->load->view('website/profile', $data);
        $this->load->view('website/footer');
    }





}



