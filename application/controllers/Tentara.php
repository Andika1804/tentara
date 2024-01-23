<?php

class Tentara extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentara_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['judul'] = 'Daftar Tentara';
        $data['tentara'] = $this->Tentara_model->getAllTentara();
        $this->load->view('templates/header', $data);
        $this->load->view('tentara/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Tentara';

        $data['wilayah'] = $this->Tentara_model->getAllKodewilayah();
        $data['pangkat'] = $this->Tentara_model->getAllPangkat();
        $this->load->view('templates/header', $data);
        $this->load->view('tentara/tambah');
        $this->load->view('templates/footer');
        
        if ($this->input->post('tombolTambah')){
            $this->Tentara_model->tambahDataTentara();
            redirect('tentara');
            // echo 'hello';
        }
    }

    public function hapus($id)
    {
        $this->Tentara_model->hapusDataTentara($id);
        redirect('tentara');
    
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Tentara';
        $data['tentara'] = $this->Tentara_model->getTentaraById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('tentara/detail', $data);
        $this->load->view('templates/footer', $data);
    }

}
