<?php

// array scalar mahasiswa
$m1 = ['nim' => 15536562, 'nama' => 'Raka Pramudya', 'nilai' => 95];
$m2 = ['nim' => 66523652, 'nama' => 'Agus Suprapto', 'nilai' => 57];
$m3 = ['nim' => 36661542, 'nama' => 'Ahmad Syafii', 'nilai' => 86];
$m4 = ['nim' => 73786733, 'nama' => 'Dimas Wahyu', 'nilai' => 83];
$m5 = ['nim' => 46267236, 'nama' => 'Yudha Setiawan', 'nilai' => 79];
$m6 = ['nim' => 36736723, 'nama' => 'Agnes Monika', 'nilai' => 74];
$m7 = ['nim' => 46767236, 'nama' => 'Sumanto Junior', 'nilai' => 63];
$m8 = ['nim' => 38782398, 'nama' => 'Ririn Anggraini', 'nilai' => 80];
$m9 = ['nim' => 73874263, 'nama' => 'Astuti Permata', 'nilai' => 58];
$m10 = ['nim' => 62365723, 'nama' => 'Ahmad Rojali', 'nilai' => 69];

// array assosiatif
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

// array judul
$judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

// function aggregat
$jumlahMahasiswa = count($mahasiswa);
$kolomNilai = array_column($mahasiswa, 'nilai');
$nilaiMax = max($kolomNilai);
$nilaiMin = min($kolomNilai);
$totalNilai = array_sum($kolomNilai);
$rata2 = $totalNilai / $jumlahMahasiswa;

// detail
$details = [
    'Nilai Tertinggi' => $nilaiMax,
    'Nilai Terendah' => $nilaiMin,
    'Rata-Rata Nilai' => $rata2,
    'Jumlah Mahasiswa' => $jumlahMahasiswa
];


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-dark bg-opacity-50">
    <div class="container">
        <h1 class="text-center mt-2">Data Nilai Mahasiswa</h1>
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
            <?php
            $no = 1;
            foreach ($mahasiswa as $mahasiswa) {
                $keterangan = ($mahasiswa['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                // grade
                if ($mahasiswa['nilai'] >= 90 && $mahasiswa['nilai'] <= 100) $grade = 'A';
                elseif ($mahasiswa['nilai'] >= 80 && $mahasiswa['nilai'] < 90) $grade = 'B';
                elseif ($mahasiswa['nilai'] >= 70 && $mahasiswa['nilai'] < 80) $grade = 'C';
                elseif ($mahasiswa['nilai'] >= 60 && $mahasiswa['nilai'] < 70) $grade = 'D';
                else $grade = 'E';

                // predikat
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Baik';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Sangat Kurang';
                        break;
                    default:
                        $predikat = '';
                        break;
                }
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php $no++;
            } ?>
            </tbody>

            <tfoot>
                <?php
                foreach ($details as $ket => $detail) {
                ?>
                    <tr>
                        <th colspan="5"><?= $ket ?></th>
                        <th colspan="2"><?= $detail ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>