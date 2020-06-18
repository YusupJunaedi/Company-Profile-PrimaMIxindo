<?php

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_admin');
    }

    public function index()
    {
        $this->load->view('website/login');
    }

    public function auth()
    {
        if($_POST){

            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $user     = $this->Model_admin->user($username);

            if(password_verify($password, $user['password'])){
                $data   = array(
                    'username'  => $user['nama'],
                    'fullname'  => $user['fullname'],
                    'email'     => $user['email']
                    );
                $this->session->set_userdata('login', $data);
                redirect('admin_home');
            }else{
                redirect('login');
            }

            
        }

    }

    public function tambah()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $data = [
            'nama'      => 'Admin',
            'fullname'  => 'Yusup Junaedi',
            'password'  => password_hash($password, PASSWORD_DEFAULT),
            'email'     => 'admin@gmail.com'
        ];

        $this->db->insert('users', $data);
    }



}