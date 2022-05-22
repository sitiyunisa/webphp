<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h3>Belanja Online</h3>
<hr>
  <form method="GET" action="form_belanja.php">
  <div class="container">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">customer</label> 
    <div class="col-5">
      <input id="customer" name="customer" placeholder="nama customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">pilih produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih produk" id="pilih produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="pilih produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih produk" id="pilih produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="pilih produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih produk" id="pilih produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="pilih produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="jumlah">jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="jumlah barang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="kirim" type="kirim" class="btn btn-success">kirim</button>
    </div>
  </div>
</form>
<?php
  $kirim = $_GET['kirim'];
  $customer = $_GET['customer'];
  $pilih_produk = $_GET['pilih_produk'];
  $jumlah = $_GET['jumlah'];

  if ($pilih_produk == "TV") {
      $harga = 4200000;
  }
  elseif($pilih_produk == "Kulkas") {
      $harga = 3100000;
  }
  if($pilih_produk =="mesin cuci") {
      $harga = 3800000;
  }

  $total = $harga * $jumlah;
  
  echo 'Nama Customer : '.$customer;
  echo "<br>Produk Pilihan : $pilih_produk";
  echo '<br>Jumlah Beli : '.$jumlah;
  echo '<br>Total Belanja : Rp. '.$total;
  ?>   
</body>
</html>