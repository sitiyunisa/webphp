<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matakuliah</title>

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
   
</tr>
 
<?php
 $nomor++;
 
}
?>
 </tbody>
 </table>

</div> 
</body>
</html>
