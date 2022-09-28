<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pehitungan Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3">Form Data Pegawai</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select name="agama" id="agama" class="form-control">
                    <option disabled selected>--- Pilih Agama ---</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Katholik">Katholik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Jabatan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="jabatan" value="Manager">
                    <label class="form-check-label" for="jabatan">
                        Manager
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="jabatan" value="Asisten">
                    <label class="form-check-label" for="jabatan">
                        Asisten
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="jabatan" value="Kabag">
                    <label class="form-check-label" for="jabatan">
                        Kabag
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="jabatan" value="Staff">
                    <label class="form-check-label" for="jabatan">
                        Staff
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Menikah">
                    <label class="form-check-label" for="status">
                        Menikah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Belum Menikah">
                    <label class="form-check-label" for="status">
                        Belum Menikah
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jumlah_anak" class="form-label">Jumlah Anak</label>
                <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary form-control" name="kirim">Kirim</button>
            </div>
        </form>
    </div>

    <?php
    //tangkap request
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumlah_anak = $_POST['jumlah_anak'];
    $tombol = $_POST['kirim'];

    switch ($jabatan) {
        case 'Manager':
            $gapok = 20000000;
            break;
        case 'Asisten':
            $gapok = 15000000;
            break;
        case 'Kabag':
            $gapok = 10000000;
            break;
        case 'Staff':
            $gapok = 4000000;
            break;
        default:
            $gapok = 0;
            break;
    }
    $tunjab = (20 * $gapok) / 100;

    if ($status == "Menikah" && $jumlah_anak > 0 && $jumlah_anak <= 2) {
        $tunkel = (5 * $gapok) / 100;
    } elseif ($status == "Menikah" && $jumlah_anak > 5 && $jumlah_anak <= 5) {
        $tunkel = (10 * $gapok) / 100;
    } elseif ($status == "Menikah" && $jumlah_anak > 5) {
        $tunkel = (15 * $gapok) / 100;
    } else {
        $tunkel = 0;
    }

    $gajikotor = $gapok + $tunjab + $tunkel;
    $zakat = ($agama == "Islam" && $gajikotor >= 6000000) ? (2.5 * $gajikotor) : 0;
    $takehomepay = $gajikotor - $zakat;

    if (isset($tombol)) { ?>
        <div class="container">
            <div class="card" style="width: 100%;">
                <div class="body">
                    <div class=" alert alert-primary p-5" role="alert">
                        <p>Nama Pegawai : <?= $nama ?></p>
                        <p>Agama : <?= $agama ?></p>
                        <p>Jabatan : <?= $jabatan ?></p>
                        <p>Status : <?= $status ?></p>
                        <p>Jumlah Anak : <?= $jumlah_anak ?></p>
                        <p>Gapok : Rp.<?= number_format($gapok) ?></p>
                        <p>Tunjangan Jabatan : Rp.<?= number_format($tunjab, 2, ',', '.') ?></p>
                        <p>Tunjangan Keluarga : Rp.<?= number_format($tunkel, 2, ',', '.') ?></p>
                        <p>Gaji Kotor : Rp.<?= number_format($gajikotor, 2, ',', '.') ?></p>
                        <p>Zakat : Rp.<?= number_format($zakat, 2, ',', '.') ?></p>
                        <p>Take Home Pay : Rp.<?= number_format($takehomepay, 2, ',', '.') ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        const tampil = new bootstrap.Modal("#tampil");
        tampil.show();
    </script>
</body>

</html>