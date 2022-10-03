<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D
{

    public $jari;
    public $phi;
    public function namaBidang()
    {
        echo '<br/>Lingkaran';
    }

    public function __construct($phi, $jari)
    {
        $this->phi = $phi;
        $this->jari = $jari;
    }

    public function luasBidang()
    {
        return (pow($this->jari, 2) * $this->phi);
    }

    public function kelilingBidang()
    {
        return (2 * $this->phi * $this->jari);
    }

    public function cetak()
    {
        echo  $this->namaBidang();
        echo '<td>' . 'Phi : ' . $this->phi . ' Cm' . '<br/>'  . 'Jari-jari : ' . $this->jari . ' Cm';
        echo '</td>';
        echo '<td>' . $this->luasBidang() . ' Cm';
        echo '</td>';
        echo '<td>' . $this->kelilingBidang() . ' Cm';
        echo '</td>';
    }
}
