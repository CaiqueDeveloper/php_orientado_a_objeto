<?php
class Conta{

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;

        if($this->saldo >= 0){
            
            $this->saldo = $saldo;
        }
    }

    public function getInfo(){

        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }
    public function depositar($quantidade){
        
        if((!is_float($quantidade) || !is_int($quantidade)) && $quantidade <= 0){
            return 'O valor informado não é valido!';
        }

        $this->saldo += $quantidade;
    }
    public function getSaldo(){
        
        return $this->saldo;
    }
}