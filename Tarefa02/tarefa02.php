<?php

$valor01 = 2;
$valor02 = 10;

function soma($valor01, $valor02)  {
    $return = $valor01 + $valor02;
}

function quadrado ($valor01) {
    return pow ($valor01, 2);
}

echo soma($valor01, $valor02);
echo '<br>';
echo quadrado($valor01);
