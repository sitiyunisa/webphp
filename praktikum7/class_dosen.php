<?php
require_once 'class_person.php';
class dosen extends person{
    public $nidn;
    public $pendidikan;

    function __construct($nidn,$nama){
        $this->nidn = $nidn;
        $this->nama = $nama;
    }
}
