<?php

// self digunakan jika property atau method yg bersifat statis atau konstanta
// Tidak bisa digunakan di Object!!
class Lingkaran {
    const PI = 3.14;
    public function luas($jari) {
        echo self::PI * $jari * $jari;
    }
}
$lingkaran = new Lingkaran();
echo Lingkaran::PI;
echo PHP_EOL;
$lingkaran->luas(7);
echo PHP_EOL;

?>