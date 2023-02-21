<?php

class Product{

	private $name;
	private $quantity;
	private $price;
	private $supplier;

	public function __construct($name, $quantity, $price){

			$this->name = $name;
			$this->quantity = $quantity;
			$this->price = $price;
	}
	
	public function getName(){
		return $this->name;
	}
	public function getQuantity(){
		return $this->quantity;
	}
	public function getPrice(){
		return 'R$ '.number_format($this->price, '2', ',', '.');
	}
	public function setSupplier(Supplier $supplier){
		$this->supplier = $supplier;
	}
	public function getSupplier(){
		return $this->supplier;
	}
}