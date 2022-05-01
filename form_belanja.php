<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
  $kirim = $_POST['kirim'];
  $customer = $_POST['customer'];
  $pilih_produk = $_POST['pilih_produk'];
  $jumlah = $_POST['jumlah'];

  if ($pilih_produk == "TV") {
      $harga = 4200000;
  }
 elseif($pilih_produk == "Kulkas") {
      $harga = 3100000;
  }
  if($pilih_produk == "mesin cuci") {
      $harga = 3800000;
  }

  $total = $harga * $jumlah;
  
  echo 'Nama Customer : '.$customer;
  echo "<br>Produk Pilihan : $pilih_produk";
  echo '<br>Jumlah Beli : '.$jumlah;
  echo '<br>Total Belanja : Rp. '.$total;
  ?> 
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>