<?php


class Dokumentasi extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_website');
    }


    public function index()
    {
        $data['judul']    = 'Dokumentasi';
        $data['album']    = $this->Model_website->getAlbum();

        $this->load->view('website/header', $data);
        $this->load->view('website/dokumentasi');
        $this->load->view('website/footer');
    }

    public function dokumentasi_detail($id)
    {
        $data['judul']      = 'Dokumentasi';
        $data['album_detail'] = $this->Model_website->getAlbumDetail($id);

        $this->load->view('website/header', $data);
        $this->load->view('website/dokumentasi_detail');
        $this->load->view('website/footer');
    }






}