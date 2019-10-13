<?php

$str = "abcdefg abcdefg";

var_dump(substr($str, -1)); // g
var_dump(substr($str, -2)); // fg
var_dump(substr($str, -2, 1)); // f


var_dump($str[-1]); // g

$indexString = strpos($str, "c");
var_dump($indexString); // 2
$index2String = strpos($str, "c", 4); // pesquisa a partir do 5º char e encontra o primeiro c (segundo da frase)
var_dump($index2String); // 10

// offset negativo: novo no php 7.1
$index3String = strpos($str, "c", -8); // volta 9 chars a partir do final da linha e retorna o primeiro c (segundo da frase)
var_dump($index3String); // 10

