<?php

class Balok {
    public $panjang;
    public $lebar;
    public $tinggi;

    public function __construct($panjang, $lebar, $tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function hitungVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

class Bola {
    public $jari;

    public function __construct($jari) {
        $this->jari = $jari;
    }

    public function hitungVolume() {
        return (4/3) * pi() * pow($this->jari, 3);
    }
}

// Contoh penggunaan
$balok = new Balok(3, 4, 5);
echo "Volume balok: " . $balok->hitungVolume() . "\n";

$bola = new Bola(5);
echo "Volume bola: " . $bola->hitungVolume() . "\n";

?>