<?php
// declare(strict_types=1);

// Não funciona aaaaaa
/*
function sum($x, $y):int
{
    return $x + $y;
}

echo sum(1.3, 3);
echo sum(null, 1);
echo sum(null, null);
 */

// ?type -> permite o nulo e type
function sum(?int $x = null):?int
{
    return $x + $y;
}

var_dump(sum(null));
