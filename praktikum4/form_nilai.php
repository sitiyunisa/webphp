<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <h2 style="text-align: center;" >form nilai siswa</h2>
        <hr/>
<form method="POST action="form_nilai.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="masukkan nim anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">MATA KULIAH</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">dasar-dasar pemograman</option>
        <option value="web">pemograma web</option>
        <option value="basdat">basis data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">NILAI</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="masukkan nilai anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </div>
</form>  
<?php
require_once 'class_nilaimmahasiswa.php';
if($_POST){
    $ns = new nilaimahasiswa(($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $hasil = $ns->kelulusan($keterangan);
    $hasil2 = $ns->grade($keterangan);
    echo 'NIM : ' .$ns->nim;
    echo '<br/>mata kuliah : ' .$ns->matkul
    echo '<br/>nilai : ' .$ns->nilai;
    echo '<br/>status : ' .$ns->kelulusan($keterangan);
    echo '<br/>grade : ' .$ns->grade($keterangan)
}
?> 
</body>
</html>