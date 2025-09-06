<?php

//Recebe os valores e o sinal da operação
function fazerOperacao(int|float $n1, int|float $n2, string $op){
    //verificar se o sinal é compativel com algum sinal matemático e fazer a conta com o sinal referente
    $resultado = match($op){
        '+' => $n1 + $n2,
        '-' => $n1 - $n2,
        '*' => $n1 * $n2,
        '/' => $n1 / $n2
    };

    return $resultado;
}