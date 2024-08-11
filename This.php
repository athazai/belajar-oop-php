<?php


// Tidak bisa digunakan di Object!!
class Printer {
    private $content;
    public function setContent($content) {
        $this->content = $content;
    }
    public function cetak() {
        echo $this->content;
    }
}
// this = $printer1
$printer1 = new Printer();
$printer1->setContent('Aku printer satu');
$printer1->cetak();
echo PHP_EOL;
$printer2 = new Printer();
$printer2->setContent('Aku printer dua');
echo $printer2->cetak();
echo PHP_EOL;
$printer1->cetak();
echo PHP_EOL;



?>