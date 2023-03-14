<?php
require_once 'classes/Characteristic.php';
require_once 'classes/Product.php';

$product = new Product('Chocolate',10,7);
$product->addCharacteristic('Cor', 'Branco');
$product->addCharacteristic('Peso', '2.6kg');

print 'Produto'. $product->getName().'<br>';
foreach($product->getCharacteristic() as $ch){
    print 'Caracteristicas: '. $ch->getName(). ' - '. $ch->getValue();
}