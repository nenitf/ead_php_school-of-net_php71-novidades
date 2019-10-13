<?php

error_reporting(-1); // evita o comportamento estranho a seguir

// o php tenta localizar inteiros para somar
$x = "10 coisas" + "1 coisa";
echo $x; // 11
