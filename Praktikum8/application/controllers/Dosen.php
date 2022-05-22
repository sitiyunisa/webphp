<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index(){
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getAll();
        $data['dosen'] = $dosen;

        //$this->load->view('layouts/header');
        $this->load->view('dosen/index',$data);
        //$this->load->view('layouts/footer');
    }

    public function detail($id){
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getById($id);
        $data['dosen'] = $dosen;

       // $this->load->view('layouts/header');
        $this->load->view('dosen/detail',$data);
        //$this->load->view('layouts/footer');
    }
}