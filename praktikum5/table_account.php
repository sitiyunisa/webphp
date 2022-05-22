<!DOCTYPE html>
<head>
    <title>Praktikum 5</title>
</head>
<?php
$ab1 = ['id'=> 1, 'nomor' => 'C001', 'nama' => 'Ahmad', 'saldo' => 6000000];
$ab2 = ['id'=> 2, 'nomor' => 'C002', 'nama' => 'Budi', 'saldo' => 5350000];
$ab3 = ['id'=> 3, 'nomor' => 'C003', 'nama' => 'Kurniawan', 'saldo' => 2500000];

$ar_account = [$p1, $p2, $p3];
?>
<body style="margin: 30px;">
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Account</th>
            <th>Nama</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_account as $ac) {
            echo '<tr><td>'.$no.'</td>';
            echo '<td>'.$ac['nomor'].'</td>';
            echo '<td>'.$ac['nama'].'</td>';
            $ha = $ac['saldo'];
            echo '<td>'.number_format($ha).'</td><tr>';
            $no++;
        }
        ?>
    </tbody>
</table>
</body>
</html>