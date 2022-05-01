<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>array &form processing</h1>
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
              <form method="post" action="form_belanja.php">
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
    <!-- /.content -->
  </div>
<?php
    include_once 'footer.php';
?>
