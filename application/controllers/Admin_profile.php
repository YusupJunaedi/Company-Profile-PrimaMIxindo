<?php

class Admin_profile extends CI_Controller{

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
        $profile    = $this->Model_admin->getData('profile');

        $data   = [
                    'title'     => 'Data Profile',
                    'user'      => $user['fullname'],
                    'profile'   => $profile
                  ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/profile');
    }

    public function edit($id)
    {
        $user       = $this->session->userdata('login');
        $profile    = $this->Model_admin->getDataById('profile', $id);


        $data   = [
            'title'     => 'Edit Data Profile',
            'user'      => $user['fullname'],
            'id'        => $profile[0]['id'],
            'judul'     => $profile[0]['judul'],
            'isi'       => $profile[0]['isi'],
          ];

          $this->load->view('admin/head', $data);
          $this->load->view('admin/profile_form');
    }

    public function save()
    {
        $id     = $this->input->post('id');
        $judul  = $this->input->post('judul'); 
        $isi    = $this->input->post('isi');

        $data   = [
                    'id'    => $id,
                    'judul' => $judul,
                    'isi'   => $isi
                  ];

        $this->Model_admin->updateData('profile', $id, $data);
        $this->session->set_flashdata("save_profile", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Profile Berhasil Di Update</div>");
        redirect('admin_profile');
    }



}