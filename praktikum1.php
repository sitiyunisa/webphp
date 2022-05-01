<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>variabel data type & array</h1>
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
// Definisikan variable
$nama = 'siti yunisa salsabilla';
$umur = 19;
$berat = 50.4;

echo 'Nama : ' .$nama;
echo '<br/>Umur : ' .$umur. 'Tahun';
echo '<br/>Berat : ' .$berat. ' Kg ';

echo "<br/> Hello $nama Apakabar";
echo "<br/> Hai nama saya $nama Umur saya $umur Berat badan saya $berat Kg, Salam kenal semua nya";
echo "<hr>";
?>

<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

<h3>Daftar Nilai Siswa</h3>
<!-- buka table -->
<table class="table table-striped table-dark" border= "1" width= "100%">
<thead class="table-dark">
    <tr>
        <th> 
            No
        </th>
        <th >
            NIM
        </th>
        <th s>
            UTS
        </th>
        <th>
            UAS
        </th>
        <th>
            TUGAS
        </th>
        <th>
            Nilai Akhir
        </th>
    </tr>
</thead>
<tbody>
    <?php 
    $nomor = 1;
    foreach ($ar_nilai as $nilai) {
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nilai['nim'].'</td>';
echo '<td>'.$nilai['uts'].'</td>';
echo '<td>'.$nilai['uas'].'</td>';
echo '<td>'.$nilai['tugas'].'</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas']+$nilai['tugas'])/3;
// fungsi number format untuk membuat format penulisan bilangan angka, seperti ribuan ratusan dan lainnya
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
<!-- tutup table -->
</tbody>
</table>
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

</div>
<?php
    include_once 'footer.php';
?>