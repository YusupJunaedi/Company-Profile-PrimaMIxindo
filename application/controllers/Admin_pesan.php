<?php

class Admin_pesan extends CI_Controller{

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
        $user   = $this->session->userdata('login');
        $pesan  = $this->Model_admin->getData('kontak', 'DESC');

        $data  = [
                    'title'     => 'Data Pesan',
                    'user'      => $user['fullname'],
                    'pesan'     => $pesan
                 ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/pesan');
    }

    public function hapus($id)
    {
        $this->Model_admin->hapusData('kontak', $id);
        $this->session->set_flashdata("save_pesan", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pesan Berhasil Di Hapus</div>");
        redirect('admin_pesan');
    }



}