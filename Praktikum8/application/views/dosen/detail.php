<div class="col-md-12">
    <h3>Detail Mahasiswa</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th><th>Nama</th><th>Gender</th>
                <th>Tempat Lahir</th><th>Tanggal Lahir</th>
                <th>nidn</th><th>pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$dosen->id?></td>
                <td><?=$dosen->nama?></td>
                <td><?=$dosen->gender?></td>
                <td><?=$dosen->tmp_lahir?></td>
                <td><?=$dosen->tgl_lahir?></td>
                <td><?=$dosen->nidn?></td>
                <td><?=$dosen->pendidikan?></td>
            </tr>
        </tbody>
    </table>
</div>