<?php

class Model_website extends CI_Model {


    public function getSliderHome()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('slider', 3)->result_array();
    }

    public function getKeunggulan()
    {
        return $this->db->get('keunggulan')->result_array();
    }

    public function getProfile(){
        return $this->db->get('profile')->row_array();
    }

    public function getReputasi(){
        return $this->db->get('reputasi')->row_array();
    }

    public function getTestimoni(){
        return $this->db->get('testimoni')->result_array();
    }

    public function getPegawai(){
        return $this->db->get('pegawai')->result_array();
    }

    public function getAlbum(){
        return $this->db->get('album')->result_array();
    }

    public function getAlbumDetail($id)
    {
        return $this->db->get_where('dokumentasi', array('id_album' => $id))->result_array();
    }
    

    public function getPricing(){
        return $this->db->get('pricing')->result_array();
    }

    public function getDataLimit($tabel, $limit, $urutan = ''){
        $this->db->order_by('id', $urutan);
        $this->db->limit($limit); 
        return $this->db->get($tabel)->result_array();
    }

    
    public function tambahContact()
    {
        $data = array(
            'nama'      => $this->input->post('nama', true),
            'subject'   => $this->input->post('subject', true),
            'email'     => $this->input->post('email', true),
            'pesan'     => $this->input->post('pesan', true),
            'date'      => date('Y-m-d'),
            'time'      => date('h:i:s')
            );
    
        $this->db->insert('kontak', $data);
    }

    public function insertPesanan($data)
    {
        $this->db->insert('pesanan', $data);
    }



}