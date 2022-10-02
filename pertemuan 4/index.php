<?php

require 'class.php';

$p1 = new Pegawai(26382, 'Raka Pramudya Fidiandoko', 'Manager', 'Islam', 'Menikah');
$p2 = new Pegawai(88367, 'Agnes Kristian Angelina', 'Asmen', 'Kristen', 'Belum Menikah');
$p3 = new Pegawai(37477, 'Rendi Ferdiansyah', 'Kabag', 'Konghucu', 'Menikah');
$p4 = new Pegawai(63764, 'Monica Agustina', 'Staff', 'Budha', 'Belum Menikah');
$p5 = new Pegawai(47632, 'Rendi Juliansyah', 'Staff', 'Hindu', 'Menikah');

$judul = ['No', 'Nip', 'Nama', 'Jabatan', 'Agama', 'Status', 'Gaji Pokok', 'Tunj Jab', 'Tunkel', 'Zakat', 'Gaji Bersih'];

$pegawai = [$p1, $p2, $p3, $p4, $p5];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaji Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-dark bg-opacity-50">
    <div class="container-fluid">
        <h1 class="text-center mt-3">Gaji Pegawai</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach ($judul as $jdl) {
                    ?>
                        <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($pegawai as $pg) {
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $pg->cetak() ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>