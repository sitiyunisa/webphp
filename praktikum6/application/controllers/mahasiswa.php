<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mahasiswa extends CI_Controller{
    public function index()
    {
        //load atau memanggil model mahasiswa
        $this->load->model('mahasiswa_model', 'mhs1');
        //buat objek model 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='210001';
        $this->mhs1->nama='Athala Muhammad';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.93;
        
        //load atau memanggil model mahasiswa
        $this->load->model('mahasiswa_model', 'mhs2');
        //buat objek model 2 dan nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim='210017';
        $this->mhs2->nama='Bella Latifa';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.40;

        //load atau memanggil model mahasiswa
        $this->load->model('mahasiswa_model', 'mhs3');
        //buat objek model 3 dan nilainya
        $this->mhs3->id=3;
        $this->mhs3->nim='210030';
        $this->mhs3->nama='Fathan Muhammad';
        $this->mhs3->gender='L';
        $this->mhs3->ipk=3.80;
        
        //simpan object ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        
        //siapkan data untuk di kirim ke dalam view, data diambil dari object dalam array 
        $data['list_mhs'] = $list_mhs;
        
        //render data ke dalam view
        $this->load->view('mahasiswa/index', $data);
    }
}
?>