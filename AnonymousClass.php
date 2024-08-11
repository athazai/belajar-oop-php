<?php

$foo = new class{
    public function foo() {
        echo 'foo';
    }
};
$foo->foo();
echo PHP_EOL;


class SebuahClass {}
interface SebuahInterface {}
trait SebuahTrait {}
var_dump(new class(10) extends SebuahClass implements SebuahInterface {
    private $num;
    public function __construct($num) {
        $this->num = $num;
    }
    use SebuahTrait;
});


class SeekorClass {}
interface SeekorInterface {}
trait SeekorTrait {}
var_dump(new class(10) extends SeekorClass implements SebuahInterface {
    private $num;
    public function __construct($num) {
        $this->num = $num;
    }
    use SeekorTrait;
});

?>