<?php

class Pegawai
{
    public $nip, $nama, $jabatan, $agama, $status;

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    public function gapok($jabatan)
    {
        $this->jabatan = $jabatan;
        switch ($jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asmen':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = '';
                break;
        }

        return $gapok;
    }

    public function tunjab()
    {
        $tunjab = (20 * $this->gapok($this->jabatan)) / 100;
        return $tunjab;
    }

    public function tunkel($status)
    {
        $this->status = $status;
        $tunkel = ($this->status == 'Menikah') ? (10 * $this->gapok($this->jabatan)) / 100 : 0;
        return $tunkel;
    }

    public function gator()
    {
        $gator = $this->gapok($this->jabatan) + $this->tunjab() + $this->tunkel($this->status);
        return $gator;
    }
    public function zakat($agama)
    {
        $this->agama = $agama;
        $zakat = ($this->agama == 'Islam' && $this->gator() >= 6000000) ? (2.5 * $this->gapok($this->jabatan)) / 100 : 0;
        return $zakat;
    }

    public function totalgaji()
    {
        $totalgaji = $this->gator() - $this->zakat($this->agama);
        return $totalgaji;
    }

    public function cetak()
    {
        echo  $this->nip;
        echo '<td>' . $this->nama;
        echo '</td>';
        echo '<td>' . $this->jabatan;
        echo '</td>';
        echo '<td>' . $this->agama;
        echo '</td>';
        echo '<td>' . $this->status;
        echo '</td>';
        echo '<td> Rp. ' . number_format($this->gapok($this->jabatan), 0, ',', '.');
        echo '</td>';
        echo '<td> Rp. ' . number_format($this->tunjab(),  0, ',', '.');
        echo '</td>';
        echo '<td> Rp. ' . number_format($this->tunkel($this->status),  0, ',', '.');
        echo '</td>';
        echo '<td> Rp. ' . number_format($this->zakat($this->agama),  0, ',', '.');
        echo '</td>';
        echo '<td> Rp. ' . number_format($this->totalgaji(),  0, ',', '.');
        echo '</td>';
    }
}
