<?php
require_once 'classes/Cesta.php';
require_once 'classes/Product.php';

$cesta = new Cesta;
$cesta->addItem((new Product('Chocolate',7,10)));
$cesta->addItem((new Product('Café',2,8)));
$cesta->addItem((new Product('Biscoito',1,3)));
$cesta->addItem((new Product('Leite',2,17.5)));

$total = array_reduce($cesta->getItens(), function($acumulator, $item){
    $acumulator += $item->getPrice();
    return $acumulator;
}, 0);

print 'Valor Total da Cesta: R$ '.number_format($total, 2,',','.').'<br><br>';
foreach($cesta->getItens() as $item){
    print 'Item: '.$item->getName().'  '.$item->getPrice().'<br>';
}