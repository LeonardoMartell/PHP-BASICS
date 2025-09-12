<?php
function gerar($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
    /** Array com os caracteres que serão ou não usados no gerador
     * $carateres[0] implementa as letras maiúsculas
     * $carateres[1] implementa as letras minúsculas
     * $carateres[2] implementa os numeros
     * $carateres[3] implementa os caracteres especiais
     */
    $caracteres = [
        'ABCDEFGHIJKLMNOPQRSTUVYXWZ',
        'abcdefghijklmnopqrstuvyxwz',
        '0123456789',
        '!@#$%&*()_+='
    ];

    //Recebe os tipos de caracteres que o usuário escolheu e faz iteração com o array de saída
    $verificarString = [
        $maiusculas, 
        $minusculas, 
        $numeros, 
        $simbolos
    ];

    //retorna apenas os tipos de caracteres que o usuário marcar como True
    $stringSaida = array();

    //Verifica cada iteração dos tipos de carateres escolhidos e se True retorna no array de saída
    for($i=0;$i<4;$i++){
        if($verificarString[$i] === True){
            $stringSaida[] = $caracteres[$i];
        }
    }

    //transforma o array de saída numa string
    $string = join('', $stringSaida);
    //pega a string gerada, embaralha e depois corta para o numero de carateres que o usuário escolheu
    $stringFormatada = mb_substr(str_shuffle($string), 0, $tamanho);

    if($tamanho < 8 || $tamanho > 50){
        throw new InvalidArgumentException("A senha não pode ter menos de 8 ou mais de 50 caracteres");
    } else if(!($maiusculas || $minusculas || $numeros || $simbolos)){
        throw new RuntimeException("Escolha pelo menos um tipo de caratere");
    } else{
        return $stringFormatada;
    }

}