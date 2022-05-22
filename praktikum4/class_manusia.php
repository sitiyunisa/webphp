<?php
// membuat class manusia
class manusia{
    // buat property
    var $nama;
    var $warna;

// buatlah method atau function
    function tampilkan_nama(){
    return 'nama saya adalah siti yunisa salsabilla';
    }

    function warna_kulit(){
    return '<br/>kulit saya wrna coklat';
    }
}
// buat object
$manusia = new manusia();
echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>