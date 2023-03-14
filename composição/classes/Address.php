<?php

class Address{
		
	private $road;
	private $neighborhood;
	private $number;
	
	public function __construct($road, $neighborhood, $number){
		
		$this->road = $road;
		$this->neighborhood = $neighborhood;
		$this->number = $number;
	}
	public function getRoad(){
		return $this->road;
	}
	public function getNeighborhood(){
		return $this->neighborhood;
	}
	public function getNumber(){
		return $this->number;
	}
}