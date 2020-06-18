<?php

class Admin_reputasi extends CI_Controller{

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
        $reputasi   = $this->Model_admin->getData('reputasi');

        $data   = [
                    'title'     => 'Data Reputasi',
                    'user'      => $user['fullname'],
                    'reputasi'  => $reputasi
                  ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/reputasi');
    }

    public function edit($id)
    {
        $user       = $this->session->userdata('login');
        $reputasi   = $this->Model_admin->getDataById('reputasi', $id);

        $data   = [
                    'title'     => 'Edit Data Reputasi',
                    'user'      => $user['fullname'],
                    'id'     => $reputasi[0]['id'],
                    'happy'     => $reputasi[0]['happy'],
                    'project'   => $reputasi[0]['project'],
                    'positive'  => $reputasi[0]['positive'],
                    'followers' => $reputasi[0]['followers'],
                  ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/reputasi_form');
    }

    public function save()
    {
        $id         = $this->input->post('id');
        $happy      = $this->input->post('happy');
        $project    = $this->input->post('project');
        $positive   = $this->input->post('positive');
        $followers  = $this->input->post('followers');

        $data = [
                    'id'        => $id,
                    'happy'     => $happy,
                    'project'   => $project,
                    'positive'  => $positive,
                    'followers' => $followers
                ];

        $this->Model_admin->updateData('reputasi', $id, $data);
        $this->session->set_flashdata("save_reputasi", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Reputasi Berhasil Di Update</div>");
        redirect('admin_reputasi');
    }
    
   



}