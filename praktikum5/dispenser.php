<?php 
require_once 'class_dispenser(1).php';

$fanta = new Dispenser();
echo "Nama Minuman : ". $fanta->namaMinum('Fanta');
echo "<hr>";
echo "Volume Minuman : ". $fanta->isi(1000). " ml";
echo "<br>";
echo "Volume Gelas : ". $fanta->volGel(250). " ml";
echo "<br>";
echo "Harga Minuman Pergelas : ". $fanta->harga('Rp. 5000');
echo "<br>";
echo "Volume sekarang : ". $fanta->isi(1000) - $fanta->volGel(250) ." ml";
?>