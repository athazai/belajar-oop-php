<?php

interface HewanInterface {
    public function getJenis();
}
class Kambing implements HewanInterface {
    public function getJenis() {
        return 'Herbivora';
    }
}
class Harimau implements HewanInterface {
    public function getJenis() {
        return 'Karnivora';
    }
}
class Singa implements HewanInterface {
    public function getJenis() {
        return 'Karnivora';
    }
}
?>