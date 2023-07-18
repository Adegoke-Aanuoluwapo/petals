<?php


class Product
{
    public $name = 'soap';
    public $price = 100; 

    public function priceAsCurrency($currencySymbol)
    {
            $priceAsCurrency = $this->price /100;
            return $currencySymbol.$priceAsCurrency;   
    }
}

$product = new Product();
var_dump($product->priceAsCurrency('$'));