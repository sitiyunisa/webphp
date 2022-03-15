<?php
// contoh function tidak menggunakan parameter
function nama (){
    $nama = "Muhammad Farhan";
    echo "Nama Saya Adalah $nama";
};
// contoh function menggunakan parameter
function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "TI5";
    echo "<br/>Umur Saya Sekarang adalah $umur <br/> Saya Kelas $kelas";
};
nama();
umur_kelas(2001);
?>