<?php


class Services extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Model_website');
    }

    public function index()
    {
        $data['judul']  = 'Services';
        $data['pricing']	= $this->Model_website->getPricing();


        $this->load->view('website/header', $data);
        $this->load->view('website/services', $data);
        $this->load->view('website/footer');
    }



}