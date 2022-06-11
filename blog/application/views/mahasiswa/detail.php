<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detail Mahasiswa</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Mahasiswa</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa->id ?></td>
                <td><?php echo $siswa->nim?></td>
                <td><?php echo $siswa->nama?></td>
                <td><?php echo $siswa->gender?></td>
                <td><?php echo $siswa->tmp_lahir?></td>
                <td><?php echo $siswa->tgl_lahir?></td>
                <td><?php echo $siswa->ipk?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$siswa->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?=$siswa->nama?></h4>
                        <p>foto mahasiswa</p>
                        <?php echo $error;?>
                        <br/>
                        <a href="https://www.instagram.com/billa_yns/" target="_blank"><button class="btn btn_poutline_info">instagram</button></a>
                        <?php echo form_open_multipart('mahasiswa/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idmahasiswa" value="<?=$siswa->id?>"/>
                        <br/><br/>
                        <input type="submit" value="upload foto" class="btn btn-primary"/>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>