<?php 
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinum;

    public function isi($vol) {
       return $this->volume = $vol;
    }
    public function harga($harga) {
       return $this->hargaSegelas = $harga;
    }
    public function volGel($vg) {
       return $this->volumeGelas = $vg;
    }
    public function namaMinum($nm) {
       return $this->namaMinum = $nm;
    }
}
?>

