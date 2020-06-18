<?php

class Admin_pegawai extends CI_Controller{

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
        $pegawai    = $this->Model_admin->getData('pegawai', 'DESC');

        $data  = [
                    'title'     => 'Data Pegawai',
                    'user'      => $user['fullname'],
                    'pegawai'   => $pegawai
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/pegawai');
    }

    public function tambah()
    {
        $user       = $this->session->userdata('login');

        $data  = [
                    'title'     => 'Tambah Pegawai',
                    'user'      => $user['fullname'],
                    'status'    => 'new',
                    'id'        => '',
                    'nama'      => '',
                    'jabatan'   => '',
                    'photo'     => ''
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/pegawai_form');
    }

    public function save()
    {
        $status     = $this->input->post('status');
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $jabatan    = $this->input->post('jabatan');

        if( $status == 'new' ){
            if( $_FILES['photo']['name'] != NULL ){

                $config['upload_path']          = './assets/file/pegawai/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = '';
                $config['max_height']           = '';
                $config['overwrite']            = FALSE;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']        = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('photo'))
                {
                    echo 'photo terlalu besar max 2MB';       
                }
                else
                {
                    $photo = $this->upload->data('file_name');
                }

                $data = [
                            'nama'    => $nama,
                            'jabatan' => $jabatan,
                            'photo'   => $photo
                        ];

                $this->Model_admin->saveData('pegawai', $data);
                $this->session->set_flashdata("save_pegawai", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pegawai Berhasil Di Tambah</div>");
                redirect('admin_pegawai');
            }
        }else {
                
            $this->db->where('id', $id);
            $query = $this->db->get('pegawai');
            $row   = $query->row();
            
            unlink("./assets/file/pegawai/$row->photo");

            if( $_FILES['photo']['name'] != NULL ){

                $config['upload_path']          = './assets/file/pegawai';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = '';
                $config['max_height']           = '';
                $config['overwrite']            = FALSE;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']        = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('photo'))
                {
                    echo 'photo terlalu besar max 2MB';       
                }
                else
                {
                    $photo = $this->upload->data('file_name');
                }

                $data = [
                            'id'      => $id,
                            'nama'    => $nama,
                            'jabatan' => $jabatan,
                            'photo'   => $photo
                        ];
                

                $this->Model_admin->updateData('pegawai', $id,  $data);
                $this->session->set_flashdata("save_pegawai", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pegawai Berhasil Di Update</div>");
                redirect('admin_pegawai');
        }
    }

    }

    public function edit($id) 
    {
        $user       = $this->session->userdata('login');
        $pegawai    = $this->Model_admin->getDataById('pegawai', $id);

        $data  = [
                    'title'     => 'Edit Pegawai',
                    'user'      => $user['fullname'],
                    'status'    => 'update',
                    'id'        => $pegawai[0]['id'],
                    'nama'      => $pegawai[0]['nama'],
                    'jabatan'   => $pegawai[0]['jabatan'],
                    'photo'     => $pegawai[0]['photo']
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/pegawai_form');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('pegawai');
        $row   = $query->result();

        unlink("./assets/file/pegawai/$row->photo");

        $this->Model_admin->hapusData('pegawai', $id);
        $this->session->set_flashdata("save_pegawai", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pegawai Berhasil Di Hapus</div>");
        redirect('admin_pegawai');
        
    }




}