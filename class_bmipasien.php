<?php
require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BmiPasien extends BMI{
    public $tanggal;
    public $pasien;
    function __construct($id, $tanggal, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi){
        parent::__construct($berat, $tinggi);
        $this->tanggal = $tanggal;
        $this->pasien = new Pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
    }
}
?>
