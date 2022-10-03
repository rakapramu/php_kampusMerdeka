<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D
{

    public $a, $t, $b, $c;
    public function namaBidang()
    {
        echo '<br/>Segitiga Sama Sisi';
    }

    public function __construct($a, $t, $b, $c)
    {
        $this->a = $a;
        $this->t = $t;
        $this->b = $b;
        $this->c = $c;
    }

    public function luasBidang()
    {
        return (0.5 * ($this->a * $this->t));
    }

    public function kelilingBidang()
    {
        return ($this->a + $this->b + $this->c);
    }

    public function cetak()
    {
        echo  $this->namaBidang();
        echo '<td>' . 'Alas : ' . $this->a . ' Cm' . '<br/>' . 'Tinggi : ' . $this->t . ' Cm' . '<br>' . 'B : ' . $this->b . ' Cm' . '<br>' . 'C : ' . $this->c . ' Cm';
        echo '</td>';
        echo '<td>' . $this->luasBidang() . ' Cm';
        echo '</td>';
        echo '<td>' . $this->kelilingBidang() . ' Cm';
        echo '</td>';
    }
}
