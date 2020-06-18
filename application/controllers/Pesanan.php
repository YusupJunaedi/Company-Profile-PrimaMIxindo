<?php

class Pesanan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_website');
    }

    public function index()
    {
        $paket  = $this->Model_website->getPricing();
        $data = [
            'judul'  => 'Pesan',
            'paket' => $paket
        ];

        $this->load->view('website/header', $data);
        $this->load->view('website/pesanan');
        $this->load->view('website/footer');
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $tlp   = $this->input->post('tlp');
        $pesan = $this->input->post('pesan');
        $paket = $this->input->post('paket');

        $data = [
            'nama'  => $nama,
            'email' => $email,
            'tlp'   => $tlp,
            'paket' => $paket,
            'pesan' => $pesan
        ];

       $this->Model_website->insertPesanan($data);
       $this->session->set_flashdata('flash', 'Terkirim');
       redirect('pesanan');
    }



}