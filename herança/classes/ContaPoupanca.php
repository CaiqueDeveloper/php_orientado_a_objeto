<?php

class ContaPoupanca extends Conta{

    public function retirar($quantidade){

        if($this->saldo >= $quantidade){
            
            $this->saldo -= $quantidade;

        }else{
            
            return false;
        }
        return true;
    }

}