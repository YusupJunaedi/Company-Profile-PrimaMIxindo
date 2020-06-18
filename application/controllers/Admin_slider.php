<?php

class Admin_slider extends CI_Controller {

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
        $user     = $this->session->userdata('login');

        $slider   = $this->Model_admin->getData('slider', 'DESC');

        $data   = [
                    'title'     => 'Data Slider',
                    'user'      => $user['fullname'],
                    'slider'    => $slider
                ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/slider');
    }

    public function tambah()
    {
        $user     = $this->session->userdata('login');

        $data   = [
                    'title'     => 'Tambah Slider',
                    'user'      => $user['fullname'],
                    'id'        => '',
                    'judul'     => '',
                    'isi'       => '',
                    'gambar'    => '',
                    'status'    => 'new'
                ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/slider_form');
    }

    public function save()
    {
        if( $_POST ){
            $id     = $this->input->post('id');
            $judul  = $this->input->post('judul');
            $isi    = $this->input->post('isi');
            $status = $this->input->post('status');

            if( $status == 'new' ){
                if( $_FILES['gambar']['name'] != '' ){
                    $config['upload_path']          = 'assets/file/slider';
                    $config['allowed_types']        = 'jpeg|jpg|png';
                    $config['max_size']             = 2000;
                    $config['remove_space']         = true;
                    $config['overwrite']            = false;
                    $config['encrypt_name']         = false;
                    $config['max_width']            = '';
                    $config['max_height']           = '';

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if( ! $this->upload->do_upload('gambar') ) {
                        Print_r('Ukuran file terlalu besar. Maksimal 2 MB');
                        exit();
                    } else {
                        $gambar = $this->upload->data('file_name');
                    }

                    $data  = [
                        'judul'     => $judul,
                        'isi'       => $isi,
                        'gambar'    => $gambar
                            ];

                    $this->Model_admin->saveData('slider', $data);
                    $this->session->set_flashdata("flash", "Artikel berhasil disimpan" ); $this->session->set_flashdata("save_slider", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Slider Berhasil Di Tambah</div>");
                    redirect('admin_slider');
                }
            } else {
                $this->db->where('id', $id);
                $query = $this->db->get('slider');
                $row   = $query->row();

                unlink("./assets/file/slider/$row->gambar");

                if( $_FILES['gambar']['name'] != '' ){
                    $config['upload_path']          = 'assets/file/slider';
                    $config['allowed_types']        = 'jpeg|jpg|png';
                    $config['max_size']             = 2000;
                    $config['remove_space']         = true;
                    $config['overwrite']            = false;
                    $config['encrypt_name']         = false;
                    $config['max_width']            = '';
                    $config['max_height']           = '';

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if( ! $this->upload->do_upload('gambar') ) {
                        Print_r('Ukuran file terlalu besar. Maksimal 2 MB');
                        exit();
                    } else {
                        $gambar = $this->upload->data('file_name');
                    }

                    $data  = [
                        'judul'     => $judul,
                        'isi'       => $isi,
                        'gambar'    => $gambar
                            ];

                    $this->Model_admin->updateData('slider', $id, $data);
                    $this->session->set_flashdata("save_slider", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Slider Berhasil Di Update</div>");
                    redirect('admin_slider');
                }

            }
                   
        }
    }

    public function edit($id = 0)
    {
        $user     = $this->session->userdata('login');

        $slider   = $this->Model_admin->getDataById('slider', $id);
    
        $data   = [
                    'title'     => 'Edit Slider',
                    'user'      => $user['fullname'],
                    'status'    => 'update',
                    'id'        => $slider[0]['id'],
                    'judul'     => $slider[0]['judul'],
                    'isi'       => $slider[0]['isi'],
                    'gambar'    => $slider[0]['gambar'],
                ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/slider_form');
    }

    public function hapus($id)
    {
        $this->db->where('id',$id);
        $query  = $this->db->get('slider');
        $row    = $query->row();

        unlink("./assets/file/slider/$row->gambar");

        $this->Model_admin->hapusData('slider', $id);
        $this->session->set_flashdata("save_slider", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Slider Berhasil Di Hapus</div>");
        redirect('admin_slider');
    }


}