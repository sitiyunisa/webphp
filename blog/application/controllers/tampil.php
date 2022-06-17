<?php
class tampil extends CI_Controller{
    public function index(){
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/tampil',$data);
        $this->load->view('layouts/footer');
    } 

    public function matkul(){
        $this->load->model('Matakuliah_model');
        $matakuliah = $this->Matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
    
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/tampil',$data);
        $this->load->view('layouts/footer');
        }
        public function dosen(){ 
            $this->load->model('dosen_model');
            $dosen = $this->dosen_model->getAll();
            $data['dosen'] = $dosen;
            
            $this->load->view('layouts/header');
            $this->load->view('dosen/tampil', $data);
            $this->load->view('layouts/footer');
        }     
}
?>