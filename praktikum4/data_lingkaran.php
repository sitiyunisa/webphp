<?php
//memanggil file atau class_lingkaran.php
require_once 'class_lingkaran.php';
echo "nilai PHI adalah = " . lingkaran::PHI;
$lingkar1 = new lingkaran(10);
$lingkar2 = new lingkaran(4);
echo "<br/>";
//menghitung luas lingkaran menggunakan fungsi getluas
echo "<br/> luas lingkaran I adalah = " .$lingkar1->getluas();
echo "<br/> luas lingkaran II adalah = " .$lingkar2->getluas();
echo "<br/>";

// menghitung keliling lingkaran menggunakan fungsi getkeliling
echo "<br/> luas lingkaran I adalah = " .$lingkar1->getkelilinng();
echo "<br/> luas lingkaran II adalah = " .$lingkar2->getkeliling();
?>