<?php
class Conta
{
    public function __construct(protected float $saldo){}

    public function getSaldo(): float{
        return $this->saldo;
    }

    public function depositar(float $deposito){
        if(is_numeric($deposito) && $deposito > 0){
            $this->saldo += $deposito;
        } else{
            throw new InvalidArgumentException("Digite um valor válido para depósito");
        }
    }

    public function sacar(float $saque){
        if(is_numeric($saque) && $saque > 0){
            if($this->saldo >= $saque){
                $this->saldo -= $saque;
            } else{
                throw new InvalidArgumentException("O valor do saque não pode ser superior ao saldo da conta");
            }
        } else{
            throw new InvalidArgumentException("Digite um valor válido para saque");
        }
    }
}