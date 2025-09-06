<?php

function fazerOperacao($n1, $n2, $op){
    $resultado = match($op){
        '+' => $n1 + $n2,
        '-' => $n1 - $n2,
        '*' => $n1 * $n2,
        '/' => $n1 / $n2
    };

    return $resultado;
}