<?php

class Admin_dokumentasi extends CI_Controller{

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
        $dokumentasi      = $this->Model_admin->getData('dokumentasi', 'DESC');

        $data  = [
                    'title'         => 'Data Dokumentasi',
                    'user'          => $user['fullname'],
                    'dokumentasi'    => $dokumentasi
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/dokumentasi');
    }

    public function tambah()
    {
        $user       = $this->session->userdata('login');
        $album      = $this->Model_admin->getData('album', 'DESC');

        $data  = [
                    'title'         => 'Tambah Album',
                    'user'          => $user['fullname'],
                    'status'        => 'new',
                    'id'            => '',
                    'judul'         => '',
                    'photo'         => '',
                    'id_album'      => $album
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/dokumentasi_form');
    }

    public function save()
    {
        $status         = $this->input->post('status');
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');
        $id_album       = $this->input->post('id_album');

        if( $status == 'new' ){
            if( $_FILES['photo']['name'] != NULL ){

                $config['upload_path']          = './assets/file/dokumentasi/';
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
                            'judul'     => $judul,
                            'photo'    => $photo,
                            'id_album'  => $id_album
                        ];

                $this->Model_admin->saveData('dokumentasi', $data);
                $this->session->set_flashdata("save_dokumentasi", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Album Berhasil Di Tambah</div>");
                redirect('admin_dokumentasi');
            }
        }else {
                
            $this->db->where('id', $id);
            $query = $this->db->get('dokumentasi');
            $row   = $query->row();
            
            unlink("./assets/file/dokumentasi/$row->photo");

            if( $_FILES['photo']['name'] != NULL ){

                $config['upload_path']          = './assets/file/dokumentasi';
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
                            'id'            => $id,
                            'judul'     => $judul,
                            'photo'    => $photo,
                            'id_album'  => $id_album
                        ];
                

                $this->Model_admin->updateData('dokumentasi', $id,  $data);
                $this->session->set_flashdata("save_dokumentasi", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Dokumentasi Berhasil Di Update</div>");
                redirect('admin_dokumentasi');
        }
    }

    }

    public function edit($id)
    {
        $user       = $this->session->userdata('login');
        $album      = $this->Model_admin->getData('album', 'DESC');
        $dokumentasi = $this->Model_admin->getDataById('dokumentasi', $id);

        $data  = [
                    'title'         => 'Tambah Album',
                    'user'          => $user['fullname'],
                    'status'        => 'edit',
                    'id'            => $dokumentasi[0]['id'],
                    'judul'         => $dokumentasi[0]['judul'],
                    'photo'         => $dokumentasi[0]['photo'],
                    'id_album'      => $album
                 ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/dokumentasi_form');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('dokumentasi');
        $row   = $query->row();
            
        unlink("./assets/file/dokumentasi/$row->photo");


        $this->Model_admin->hapusData('dokumentasi', $id);
        $this->session->set_flashdata("save_dokumentasi", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Photo Dokumentasi Berhasil Di Hapus</div>");
        redirect('admin_dokumentasi');
        
    }



}