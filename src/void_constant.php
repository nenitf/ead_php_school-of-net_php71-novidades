<?php
// n está funcionando tbm...

function returnAnything($x):void
{
    // null
    return;

    // erro
    // return 1;
}

var_dump(returnAnything(11));

class Car
{
    const C_TYPE = "Normal";
    private const C_TYPE2 = "Private";
    protected const C_TYPE3 = "Protected";
}

$c = new Car;
var_dump($c::C_TYPE);

// erro
// var_dump($c::C_TYPE2);
// var_dump($c::C_TYPE3);
