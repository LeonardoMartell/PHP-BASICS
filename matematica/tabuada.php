<?php
//recebe o numero em questão e multiplica de 1 até 10
function tabuada(int|float $numero){

    //variável vazia que vai receber cada multiplicação
    $tabuada = array();

    //Aqui eu multiplico o numero recebido de 1 até 10
    for($i=1;$i<=10;$i++){
        $resultado = $numero * $i;

        array_push($tabuada, $numero." X ".$i." = ".$resultado);
    }

    return $tabuada;
}
