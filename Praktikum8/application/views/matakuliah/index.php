<div class="col-md-12">
 <h3>Daftar Matakuliah</h3>
    <table class="table">
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