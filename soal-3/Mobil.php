<?php
class Mobil {
    public $merk;
    public $tahun;
    public $warna;
    public $kecepatan;

    public function melaju() {
        echo "Mobil sedang melaju.";
    }

    public function berhenti() {
        echo "Mobil sedang berhenti.";
    }

    public function mundur() {
        echo "Mobil sedang mundur.";
    }

    public function maju() {
        echo "Mobil sedang maju.";
    }
}

$mobil = new Mobil();
$mobil->merk = "Toyota";
$mobil->tahun = 2022;
$mobil->warna = "Merah";
$mobil->kecepatan = 120;

$mobil->melaju();
echo "<br>";
$mobil->berhenti();
echo "<br>";
$mobil->mundur();
echo "<br>";
$mobil->maju();
echo "<br>";