<?php

class ParameterCasting
{
public function __construct(array $arrayType)
{
}
public function stringCast(string $stringType)
{
}
public function intCast(int $intType)
{
136
}
public function floatCast(float $floatType)
{
}
public function booleanCast(bool $booleanType)
{
}
}
$object = new ParameterCasting(array());
$object->floatCast(1);
$object->intCast(1.0);


?>