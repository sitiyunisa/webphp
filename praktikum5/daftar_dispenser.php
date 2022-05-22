<?php 
require_once 'class_dispenser.php';

$aqua = new Dispenser();
echo "Nama Minuman : ". $aqua->namaMinum('aqua');
echo "<br>";
echo "Volume Minuman : ". $aqua->isi(1000). " ml";
echo "<br>";
echo "Volume Gelas : ". $aqua->volGel(250). " ml";
echo "<br>";
echo "Harga Minuman Pergelas : ". $aqua->harga('Rp. 3000');
echo "<br>";
echo "Volume sekarang : ". $aqua->isi(1000) - $aqua->volGel(250) ." ml";
?>