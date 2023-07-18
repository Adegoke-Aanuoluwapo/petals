<?php


class Product
{
    public $name = 'soap';
    public $price = 10; 
}

// $product = new Product(); 
// var_dump($product);
// $anotherProduct = new Product;
// var_dump($anotherProduct);
$soapObject = new Product;
echo($soapObject->name). '<br>';
$soapObject->name="toothpaste";
echo($soapObject->name). '<br>';
echo($soapObject->price). '<br>';
$soapObject->price= 56;
echo($soapObject->price). '<br>';