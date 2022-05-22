<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
public function index(){
    $this->load->model('Matakuliah_model');
    $matakuliah = $this->Matakuliah_model->getAll();
    $data['matakuliah'] = $matakuliah;

    //$this->load->view('layouts/header');
    $this->load->view('matakuliah/index',$data);
    //$this->load->view('layouts/footer');
    }
}