<?php

echo preg_replace_callback('/[a-z]+/i', function (array $match){
    return 'PHP' === $match[0] ? 'OOP' : $match[0];
}, 'Saya Belajar PHP');
echo PHP_EOL;

$print = function ($word) {
    echo $word;
};
$print('Ini adalah _lamda function_');
echo PHP_EOL;


$word = 'Ini adalah _closure_';
$print = function () use ($word) {
    echo $word;
};
$print();
echo PHP_EOL;

?>