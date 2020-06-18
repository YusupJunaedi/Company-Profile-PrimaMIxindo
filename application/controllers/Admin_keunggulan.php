<?php

class Admin_keunggulan extends CI_Controller{

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
        $user           = $this->session->userdata('login');
        $keunggulan     = $this->Model_admin->getData('keunggulan');

        $data   = [
                    'title'         => 'Data Keunggulan',
                    'user'          => $user['fullname'],
                    'keunggulan'    => $keunggulan
                  ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/keunggulan');
    }

    public function edit($id)
    {
        $user           = $this->session->userdata('login');

        $keunggulan     = $this->Model_admin->getDataById('keunggulan', $id);

        $data   = [
            'title'         => 'Data Keunggulan',
            'user'          => $user['fullname'],
            'id'            => $keunggulan[0]['id'],
            'judul'         => $keunggulan[0]['judul'],
            'isi'           => $keunggulan[0]['isi']
          ];

          $this->load->view('admin/head', $data);
          $this->load->view('admin/keunggulan_form');
    }

    public function save()
    {
        $id     = $this->input->post('id');
        $judul  = $this->input->post('judul');
        $isi    = $this->input->post('isi');

        $data   = [
                    'id'    => $id,
                    'judul' => $judul,
                    'isi'   => $isi,
                  ];

        $this->Model_admin->updateData('keunggulan', $id, $data);
        $this->session->set_flashdata("save_keunggulan", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Keunggulan Berhasil Di Update</div>");
        redirect('admin_keunggulan');
    }






}