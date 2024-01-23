<?php

class Tentara_model extends CI_Controller {
    public function getAllTentara()
    {
        return $this->db->get('data_tugas_tentara')->result_array();
    }
    public function getAllKodewilayah()
    {
        return $this->db->get('kode_wilayah')->result_array();
    }
    public function getAllPangkat()
    {
        return $this->db->get('pangkat')->result_array();
    }
    
    public function tambahDataTentara()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "pangkat" => $this->input->post('pangkat', true),
            "kode_tugas" => $this->input->post('kode_tugas', true),
        ];
        $this->db->insert('data_tugas_tentara', $data);
    }

    public function hapusDataTentara($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_tugas_tentara');
    }

    public function getTentaraById($id)
    {
        $this->db->select('*');
        $this->db->from('data_tugas_tentara');
        $this->db->join('pangkat', 'data_tugas_tentara.pangkat = pangkat.id_pangkat');
        $this->db->join('kode_wilayah', 'data_tugas_tentara.kode_tugas = kode_wilayah.id_wilayah');
        $this->db->where('data_tugas_tentara.id', $id);
        
        $query = $this->db->get();
        return $query->row_array();
    }
}
