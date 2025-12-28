<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Antrian_model');
    }

    public function index()
    {
        $this->load->view('pendaftaran');
    }

    public function ambil()
    {
        $last = $this->Antrian_model->get_nomor_terakhir();
        $nomor = ($last) ? $last + 1 : 1;

        $this->Antrian_model->tambah_antrian($nomor);

        echo json_encode([
            'status' => true,
            'nomor'  => $nomor
        ]);
    }

    public function cetak($nomor)
    {
        $data['nomor'] = $nomor;
        $data['tanggal'] = date('d-m-Y H:i');
        $this->load->view('cetak_antrian', $data);
    }

}
