<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor, $nama, $saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
    public function daftar(){
    echo "<hr>{$this->nomor} {$this->nama} {$this->saldo}";
    }
}

class accountBank extends Account{
    public function nabung($uang){
        $this->saldo = $this->saldo + $uang;
        echo "<br>{$this->nama} nabung $uang jadi uangnya bertambah: {$this->saldo}<br>";
    }
    public function transfer($uang){
        $this->saldo = $this->saldo - $uang;
        echo "<br>{$this->nama} tranfer ke kurniawan sekitar $uang dan di beri ke budi 500000 jadi sisa uang  kurniawan yang  di berikan ahmad tinggal: {$this->saldo}<br>";
    }
    public function tarik($uang){
        $this->saldo = $this->saldo - $uang;
        echo "<br>{$this->nama} menarik uang sebanyak $uang dan sisa saldo budi: {$this->saldo}<br>";
    }
}
?>