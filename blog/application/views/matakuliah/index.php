<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matakuliah</title>
    <script>
        function hapusmatakuliah(pesan){
            if (confirm(pesan)){
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php 
$username = $this->session->userdata('username');
if($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<div class="col-md-12">
 <h3 style="text-align: center;">Daftar Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
 <?php
    $nomor=1;
    foreach($matakuliah as $matkul){
 ?>
 <tr>
    <td><?=$nomor?></td>
    <td><?=$matkul->nama?></td>
    <td><?=$matkul->sks?></td>
    <td><?=$matkul->kode?></td>
    <td>
       
        <a href=<?php echo base_url("index.php/matakuliah/edit/$matkul->id")?> class= "btn btn-success btn-lg active" >edit</a>
        &nbsp;
        <a href= <?php echo base_url("index.php/matakuliah/delete/$matkul->id") ?> class= "btn btn-danger btn-lg active" 
        onclick="return hapusmatakuliah('apakah anda yakin menghapus matakuliah <?php echo $matkul->nama ?>')">delete</a>
                    
    </td>
</tr>
 
<?php
 $nomor++;
 
}
?>
 </tbody>
 </table>
 <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary active" >Tambah</a>
</div> 
</body>
</html>
