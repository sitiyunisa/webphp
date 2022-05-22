<?php
class matakuliah extends CI_Controller{
    public function index()
    {
        //load atau memanggil model matakuliah
        $this->load->model('matakuliah_model', 'mt1');
        //buat objek
        $this->mt1->nama = 'Basis Data';
        $this->mt1->sks = '3';
        $this->mt1->kode = '011';

        //load atau memanggil model matakuliah
        $this->load->model('matakuliah_model', 'mt2');
        //buat objek
        $this->mt2->nama = 'Pemrograman Web';
        $this->mt2->sks = '3';
        $this->mt2->kode = '021';

        //load atau memanggil model matakuliah
        $this->load->model('matakuliah_model', 'mt3');
        //buat objek 1
        $this->mt3->nama = 'UI/UX';
        $this->mt3->sks = '2';
        $this->mt3->kode = '025';

        //simpan dalam array
        $list_mt = [$this->mt1, $this->mt2, $this->mt3];

        //siapin data dalam view
        $data['list_mt'] = $list_mt;

        //render data dalam view
        $this->load->view('matakuliah/index', $data);

    }
}
?>