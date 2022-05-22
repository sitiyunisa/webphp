<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        //$this->load->view('layouts/header');
        $this->load->view('mahasiswa/index',$data);
        //$this->load->view('layouts/footer');
    } 
    public function detail($id){
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        //$this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail',$data);
        //$this->load->view('layouts/footer');
    }
}
?>