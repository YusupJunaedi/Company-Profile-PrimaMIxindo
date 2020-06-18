<?php

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_website');
    }

    public function index()
    {
        $data['judul']  = 'Contact';

        $this->load->view('website/header', $data);
        $this->load->view('website/contact', $data);
        $this->load->view('website/footer');
    }

    public function saveKontak()
    {
        if( !isset($_POST['submit']) ){
            echo 'gagal';
        } else {
            $this->Model_website->tambahContact();
            $this->session->set_flashdata('flash', 'Terkirim');
            redirect('contact');
        }
       
    }




}