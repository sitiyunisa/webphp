<div class="col-md-12">
    <h3>Daftar Mahasiswa</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Nidm</th><th>Pendidikan</th><th>Action</th>
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
                    <a href="<?php echo "detail/$dsn->id";?>">Detail</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>