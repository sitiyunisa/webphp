<?php
// method yang mengembalikan luas dan keliling dari persegi panjang
require_once "class_persegiPanjang.php";

$kotak1 = new persegiPanjang(2, 4);
$kotak2 = new persegiPanjang(3, 6);

echo "<br>Luas Lingkaran I : ".$kotak1->getLuas();
echo "<br>Luas Lingkaran II : ".$kotak2->getLuas();

echo "<br>Keliling Lingkaran I : ".$kotak1->getKeliling();
echo "<br>Keliling Lingkaran I : ".$kotak2->getKeliling();
?>