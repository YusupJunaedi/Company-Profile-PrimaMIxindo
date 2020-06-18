<?php

class Admin_album extends CI_Controller{

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
        $album      = $this->Model_admin->getData('album', 'DESC');

        $data  = [
                    'title'     => 'Data album',
                    'user'      => $user['fullname'],
                    'album'     => $album
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/album');
    }

    public function tambah()
    {
        $user       = $this->session->userdata('login');

        $data  = [
                    'title'         => 'Tambah Album',
                    'user'          => $user['fullname'],
                    'status'        => 'new',
                    'id'            => '',
                    'nama_album'    => '',
                    'sampul_album'  => '',
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/album_form');
    }

    public function save()
    {
        $status         = $this->input->post('status');
        $id             = $this->input->post('id');
        $nama_album     = $this->input->post('nama_album');

        if( $status == 'new' ){
            if( $_FILES['sampul_album']['name'] != NULL ){

                $config['upload_path']          = './assets/file/album/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = '';
                $config['max_height']           = '';
                $config['overwrite']            = FALSE;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']        = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('sampul_album'))
                {
                    echo 'photo terlalu besar max 2MB';       
                }
                else
                {
                    $sampul_album = $this->upload->data('file_name');
                }

                $data = [
                            'nama_album'    => $nama_album,
                            'sampul_album'  => $sampul_album,
                        ];

                $this->Model_admin->saveData('album', $data);
                $this->session->set_flashdata("save_album", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Album Berhasil Di Tambah</div>");
                redirect('admin_album');
            }
        }else {
                
            $this->db->where('id', $id);
            $query = $this->db->get('album');
            $row   = $query->row();
            
            unlink("./assets/file/album/$row->sampul_album");

            if( $_FILES['sampul_album']['name'] != NULL ){

                $config['upload_path']          = './assets/file/album';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = '';
                $config['max_height']           = '';
                $config['overwrite']            = FALSE;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']        = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('sampul_album'))
                {
                    echo 'photo terlalu besar max 2MB';       
                }
                else
                {
                    $sampul_album = $this->upload->data('file_name');
                }

                $data = [
                            'id'            => $id,
                            'nama_album'    => $nama_album,
                            'sampul_album'  => $sampul_album,
                        ];
                

                $this->Model_admin->updateData('album', $id,  $data);
                $this->session->set_flashdata("save_album", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Album Berhasil Di Update</div>");
                redirect('admin_album');
        }
    }

    }

    public function edit($id) 
    {
        $user       = $this->session->userdata('login');
        $album      = $this->Model_admin->getDataById('album', $id);

        $data  = [
                    'title'         => 'Edit Album',
                    'user'          => $user['fullname'],
                    'status'        => 'update',
                    'id'            => $album[0]['id'],
                    'nama_album'    => $album[0]['nama_album'],
                    'sampul_album'  => $album[0]['sampul_album'],
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/album_form');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
            $query = $this->db->get('album');
            $row   = $query->row();
            
            unlink("./assets/file/album/$row->sampul_album");



        $this->Model_admin->hapusData('album', $id);
        $this->session->set_flashdata("save_album", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Album Berhasil Di Hapus</div>");
        redirect('admin_album');
        
    }





}