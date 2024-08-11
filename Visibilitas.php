<?php

use Mobil as Ikan;

// private
class Mobil
{
protected $roda = 4;
protected function jalan()
{
echo 'Mobil berjalan';
}
public function jumlahRoda()
{
    //untuk mengakses private
echo $this->roda;
}
}
$avanza = new Mobil();
echo $avanza->jumlahRoda();
echo PHP_EOL;


// protected bisa diwariskan ke children
class Motor extends Ikan  {

    // public function Total() {
    //     echo $this->jumlahRoda();
    // }

    public function Bule() {
        echo $this->jalan();
    }

};

$honda = new Motor();
// echo $honda->Total();
echo $honda->Bule();



?>