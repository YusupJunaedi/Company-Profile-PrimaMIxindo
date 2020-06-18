<?php

class Admin_pemesanan extends CI_Controller{

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
        $user       = $this->session->userdata('login');
        $pemesanan   = $this->Model_admin->getPemesanan();

        $data   = [
                    'title'     => 'Data Pemesanan',
                    'user'      => $user['fullname'],
                    'pemesanan'  => $pemesanan
                  ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/pemesanan');
    }

    public function cetak()
    {
        $this->load->library('dompdf_gen');

        $data['pemesanan'] = $this->Model_admin->getPemesanan();
        $this->load->view('admin/pemesanan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_penjualan.pdf", array('Attachment' =>0));
    }

}