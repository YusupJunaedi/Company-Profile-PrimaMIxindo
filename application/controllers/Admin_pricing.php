<?php

class Admin_pricing extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');

        $cek  = $this->session->userdata('login');
        if( empty($cek) ){
            redirect('');
        }
    }

    public function index(){
        $user       = $this->session->userdata('login');
        $pricing    = $this->Model_admin->getData('pricing');

        $data   = [
                    'title'     => 'Data Pricing Plan',
                    'user'      => $user['fullname'],
                    'pricing'   => $pricing
                  ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/pricing');
    }

    public function tambah()
    {
        $user       = $this->session->userdata('login');

        $data   = [
                    'title'     => 'Tambah Data Pricing Plan',
                    'user'      => $user['fullname'],
                    'status'    => 'new',
                    'id'        => '',
                    'nama_paket'=> '',
                    'judul'     => '',
                    'isi'       => '',
                    'harga'     => ''
                  ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/pricing_form');
    }

    public function save()
    {
        $status     = $this->input->post('status');
        $id         = $this->input->post('id');
        $nama_paket = $this->input->post('nama_paket');
        $judul      = $this->input->post('judul');
        $isi        = $this->input->post('isi');
        $harga      = $this->input->post('harga');

        if( $status == 'new' ){
            $data = [
                        'id'          => $id,
                        'nama_paket'  => $nama_paket,
                        'judul'       => $judul,  
                        'isi'         => $isi,
                        'harga'       => $harga,      
                    ];

            $this->Model_admin->saveData('pricing', $data);
            $this->session->set_flashdata("save_pricing", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pricing Plan Berhasil Di Tambahkan</div>");
            redirect('admin_pricing');
        }else {
            $data = [
                'id'          => $id,
                'nama_paket'  => $nama_paket,
                'judul'       => $judul,  
                'isi'         => $isi,
                'harga'       => $harga,      
            ];

            $this->Model_admin->updateData('pricing', $id, $data);
            $this->session->set_flashdata("save_pricing", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pricing Plan Berhasil Di Update</div>");
            redirect('admin_pricing');
        }

    }

    public function edit($id)
    {
        $user       = $this->session->userdata('login');
        $pricing    = $this->Model_admin->getDataById('pricing', $id);

        $data   = [
                    'title'     => 'Edit Data Pricing Plan',
                    'user'      => $user['fullname'],
                    'status'    => 'update',
                    'id'        => $pricing[0]['id'],
                    'nama_paket'=> $pricing[0]['nama_paket'],
                    'judul'     => $pricing[0]['judul'],
                    'isi'       => $pricing[0]['isi'],
                    'harga'     => $pricing[0]['harga']
                  ];
        
        $this->load->view('admin/head', $data);
        $this->load->view('admin/pricing_form');
    }

    public function hapus($id)
    {
        $this->Model_admin->hapusData('pricing',$id);
        $this->session->set_flashdata("save_pricing", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Pricing Plan Berhasil Di Hapus</div>");
            redirect('admin_pricing');
    }

}