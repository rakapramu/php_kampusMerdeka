<?php

require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

// parameter (phi dan jari2)
$ling = new Lingkaran(3.14, 10);

// parameter (luas dan tinggi)
$pp = new PersegiPanjang(5, 10);

// parameter(alas,tinggi,sampingkiri(b), dan sampingkanan(c))
$segitiga = new Segitiga(5, 12, 10, 10);

$bidangs = [$ling, $pp, $segitiga];

$judul = ['No', 'Nama Bidang', 'Ketarangan', 'Luas Bidang', 'Keliling Bidang'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidang 2 Dimensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Menghitung Bidang Dua Dimensi</h1>
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
                foreach ($bidangs as $bidang) {
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $bidang->cetak() ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>