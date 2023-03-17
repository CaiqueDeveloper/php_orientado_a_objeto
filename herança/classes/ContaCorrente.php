<?php
class ContaCorrente extends Conta{

    protected $limite;

    public function __construct($agencias, $conta, $saldo, $limite){
        
        parent::__construct($agencias, $conta, $saldo);
        $this->$limite = $limite;
    }
    public function retirar($quantidade){

        if(($this->saldo + $this->limite) >= $quantidade){

            $this->saldo -= $quantidade;
        }else{

            return false;
        }

        return true;
    }
}