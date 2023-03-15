<?php
require_once 'classes/Cesta.php';
require_once 'classes/Product.php';

$cesta = new Cesta;
$cesta->addItem((new Product('Chocolate',7,10)));
$cesta->addItem((new Product('Café',2,8)));
$cesta->addItem((new Product('Biscoito',1,3)));

foreach($cesta->getItens() as $item){
    print 'Item: '.$item->getName().'  '.$item->getPrice().'<br>';
}