<?php
class Supplier{
	
	private $name;
	private $cnpj;
	private $address;

	public function __construct($name, $cnpj){

		$this->name = $name;
		$this->cnpj = $cnpj;
	}
	
	public function getName(){
		return $this->name;
	}
	public function getCNPJ(){
		return $this->cnpj;
	}
	public function setAddress(Address $address) {
		$this->address[] = $address;
	}
	public function getAddress(){
		return $this->address;
	}
}