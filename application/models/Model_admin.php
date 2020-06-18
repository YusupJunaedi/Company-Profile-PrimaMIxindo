<?php


class Model_admin extends CI_Model {


    public function user($nama)
    {
        $this->db->where('nama', $nama);
        return $this->db->get('users')->row_array();
    }

    public function getKontak()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('kontak')->result_array();
    }

    public function getData($tabel, $urutan = ''){
        $this->db->order_by('id', $urutan);
        return $this->db->get($tabel)->result_array();
    }

    public function getDataById($tabel, $id)
    {
        return $this->db->get_where($tabel, array('id' => $id))->result_array();
    }

    public function saveData($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function updateData($tabel, $id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($tabel, $data);
    }

    public function hapusData($tabel, $id){
        $this->db->where('id', $id);
        return $this->db->delete($tabel);
    }

    public function getPemesanan()
    {
        return $this->db->get('pesanan')->result_array();
    }



}