<?php
// Variabel yang ada dalam persegi Panjang
class persegiPanjang{
    private $panjang;
    private $lebar;
    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    function getKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>