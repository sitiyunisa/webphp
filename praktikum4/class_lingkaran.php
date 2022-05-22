<?php
// membuat class lingkaran
class lingkaran{
    // buat property
    private $jari;
    const PHI = 3.14;

    // method
    function __construct($r)
    {
    $this->jari = $r;
    }

    // buat mthod getluas untuk menghitung luas lingkaran
    function getluas(){
        return self::PHI * $this->jari * $this->jari;
    }

    // buat method getkeliling untuk menghitung keliling lingkaran
    function getkeliling(){
         return 2 * self::PHI * $this->jari;
    }
}   
//tutup class
?>