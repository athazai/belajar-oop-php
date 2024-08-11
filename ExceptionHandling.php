<?php

// exception handling adalah mekanisme untuk menangkap error yang terjadi pada program dan kemudian menanganinya.
class Errorable {
    public static function calculate(int $number) {
        return ($number % 2);
    }
}
Errorable::calculate(2);
echo 'Ini tidak diesekusi';
echo PHP_EOL;


class Connection {
    public function connect() {
        throw new RuntimeException('Anda harus mengimplementasikan method connect() sesuai dengan database driver yang Anda gunakan.');
    }
} try {
    $connection = new Connection();
    $connection->connect();
} catch (RuntimeException $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}
echo 'Ini tetap dieksekusi';
echo PHP_EOL;

?>