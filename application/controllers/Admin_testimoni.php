<?php  

class Admin_testimoni extends CI_Controller{

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
        $testimoni  = $this->Model_admin->getData('testimoni','DESC');

        $data = [
                    'title'     => 'Data Testimoni',
                    'user'      => $user['fullname'],
                    'testimoni' => $testimoni
                ];

        $this->load->view('admin/head', $data);
        $this->load->view('admin/testimoni');
    }

    public function tambah()
    {
        
        $user       = $this->session->userdata('login');

        $data = [
                    'title'     => 'Data Testimoni',
                    'user'      => $user['fullname'],
                    'status'    => 'new',
                    'id'        => '',
                    'nama'      => '',
                    'isi'       => '',
                    'photo'     => '',
                    'jabatan'   => ''
                ];  

        $this->load->view('admin/head', $data);
        $this->load->view('admin/testimoni_form');
    }

    public function save()
    {
        $status  = $this->input->post('status');
        $id      = $this->input->post('id');
        $nama    = $this->input->post('nama');
        $isi     = $this->input->post('isi');
        $jabatan = $this->input->post('jabatan');

        if( $status == 'new' ){
            if( $_FILES['photo']['name'] !== NULL ){

                $config['upload_path']          = './assets/file/testimoni';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = '';
                $config['max_height']           = '';
                $config['overwrite']            = FALSE;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']         = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('photo'))
                {
                        echo 'File terlalu besar max 2Mb';
                }
                else
                {
                        $photo = $this->upload->data('file_name');

                }

                $data  = [
                            'nama'    => $nama,
                            'isi'     => $isi,
                            'photo'   => $photo,
                            'jabatan' => $jabatan
                         ];

                $this->Model_admin->saveData('testimoni', $data);
                $this->session->set_flashdata("save_testimoni", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Testimoni Berhasil Ditambah</div>");
                redirect('admin_testimoni');
            }
        } else {
            $this->db->where('id', $id);
            $query = $this->db->get('testimoni');
            $row   = $query->row();

            unlink("./assets/file/testimoni/$row->photo");

            if( $_FILES['photo']['name'] !== NULL ){

                $config['upload_path']          = './assets/file/testimoni';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = '';
                $config['max_height']           = '';
                $config['overwrite']            = FALSE;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']         = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('photo'))
                {
                        echo 'File terlalu besar max 2Mb';
                }
                else
                {
                        $photo = $this->upload->data('file_name');

                }

                $data  = [
                            'id'      => $id,
                            'nama'    => $nama,
                            'isi'     => $isi,
                            'photo'   => $photo,
                            'jabatan' => $jabatan
                         ];

                $this->Model_admin->updateData('testimoni', $id, $data);
                $this->session->set_flashdata("save_testimoni", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Testimoni Berhasil Diupdate</div>");
                redirect('admin_testimoni');
            }

        }


    }


    public function edit($id)
    {
        $user       = $this->session->userdata('login');
        $testimoni  = $this->Model_admin->getDataById('testimoni', $id);

        $data = [
                    'title'     => 'Data Testimoni',
                    'user'      => $user['fullname'],
                    'status'    => 'update',
                    'id'        => $testimoni[0]['id'],
                    'nama'      => $testimoni[0]['nama'],
                    'isi'       => $testimoni[0]['isi'],
                    'photo'     => $testimoni[0]['photo'],
                    'jabatan'   => $testimoni[0]['jabatan']
                ];  

        $this->load->view('admin/head', $data);
        $this->load->view('admin/testimoni_form');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('testimoni');
        $row   = $query->row();

        unlink("./assets/file/testimoni/$row->photo");

        $this->Model_admin->hapusData('testimoni', $id);
        $this->session->set_flashdata("save_testimoni", "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><b>Sukses!</b> Testimoni Berhasil DiHapus</div>");
        redirect('admin_testimoni');
    }








}