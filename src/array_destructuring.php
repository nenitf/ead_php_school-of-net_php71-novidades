<?php

$array = [6,7,8];
// list($x, $y, $z) = $array;
[$x, $y, $z] = $array;

var_dump($x, $y, $z);



// array associativo
$array2 = [
    'indexa' => 'a',
    'indexb' => 'b'
];

// Errado
// [$a, $b] = $array2;
['indexa' => $a, 'indexb' => $b] = $array2;

var_dump($a, $b);
