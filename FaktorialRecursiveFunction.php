<?php

class Faktorials {
    // tanpa Recursive Method
    public static function nonRecursive(int $number) {
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
    // memanggil method sendiri dalam body method / Recursive Method
    public static function recursive(int $number) {
        if (2 > $number) {
            return $number;
        }return $number * self::recursive($number - 1);
    }
}

echo Faktorials::nonRecursive(5);
echo PHP_EOL;
echo Faktorials::recursive(5);
echo PHP_EOL;

?>