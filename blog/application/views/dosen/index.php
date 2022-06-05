<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dosen</title>
    <script>
        function hapusdosen(pesan){
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
    <h3 style="text-align: center;">Daftar dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th><th>Nidm</th><th>Pendidikan</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($dosen as $dsn){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$dsn->nidn?></td>
                <td><?=$dsn->pendidikan?></td>
                <td>
                    <a href=<?php echo base_url("index.php/dosen/detail/$dsn->id")?> class= "btn btn-info btn-lg active">Detail</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/dosen/edit/$dsn->id")?> class= "btn btn-success btn-lg active" >edit</a>
                    <a href= <?php echo base_url("index.php/dosen/delete/$dsn->id") ?> class= "btn btn-danger btn-lg active" 
                    onclick="return hapusdosen('apakah anda yakin menghapus dosen bernama <?php echo $dsn->nama ?>')">delete</a>
                    
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url("index.php/dosen/form")?> class= "btn btn-primary btn-lg active" >Tambah</a>
</div>
</body>
</html>
