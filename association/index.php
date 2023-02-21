<?php

require_once 'classes/product.php';
require_once 'classes/supplier.php';
require_once 'classes/address.php';

$product = new Product('NoteBook Acer', 10, 1590.90);
$supplier = new Supplier('Carlos Alberto', 123456789);
$first_address = new Address('Rua logo ali, ','Bairro virando á esquina, ', 404);
$second_address = new Address('Rua de não sei onde, ','Bairro por ali por perto, ', 500);

$product->setSupplier($supplier); 
$product->getSupplier()->setAddress($first_address); 
$product->getSupplier()->setAddress($second_address); 

echo '<strong> Informação do Produto</strong> <br>';
echo $product->getName().' | Estoque: '.$product->getQuantity().' | '.$product->getPrice()."<br><br>";

echo '<strong> Informação do Fornecedor</strong> <br>';
echo $product->getSupplier()->getName().' CNPJ: '.$product->getSupplier()->getCNPJ()."<br><br>";

foreach($product->getSupplier()->getAddress() as $address){
		echo $address->getRoad().' '.$address->getNeighborhood().'Nª '.$address->getNumber()."<br>";
}