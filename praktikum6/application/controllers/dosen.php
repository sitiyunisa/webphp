<?php
class dosen extends CI_Controller{
    public function index()
    {
        //load atau memanggil model dosen
        $this->load->model('dosen_model','ds1');
        //buat objek
        $this->ds1->nidn='10001';
        $this->ds1->pendidikan='S1';

        //load atau memanggil
        $this->load->model('dosen_model','ds2');
        //buat objek
        $this->ds2->nidn='10002';
        $this->ds2->pendidikan='S2';

         //load atau memanggil
         $this->load->model('dosen_model','ds3');
         //buat objek
         $this->ds3->nidn='10003';
         $this->ds3->pendidikan='S3';

        //simpan objek ke dalam array
        $list_dsn = [$this->ds1, $this->ds2, $this->ds3];

        //data
        $data['list_dsn'] = $list_dsn;

        //render data
        $this->load->view('dosen/index', $data);
    }
}
?>