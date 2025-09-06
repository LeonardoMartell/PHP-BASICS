<?php

function primo(int $numeroPrimo){
    $verifi = 0;

    //Cada iteração verifica se um numero é divisível pela iteração
    for($i=2;$i<$numeroPrimo;$i++){

        //A variável $verifi acrescenta 1 em valor a cada vez que aparece um divisível 
        if(($numeroPrimo % $i) == 0){
            $verifi++;
        }
    }

    //verifica se $verifi foi acionada
    if($verifi == 0){
        echo "O número ".$numeroPrimo." é primo!";
    } else{
        echo "O número ".$numeroPrimo." não é primo!";
    }
}