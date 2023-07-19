<?php


class Product
{
    public function __construct(public $name = 'Soap', public $price =450)
    {
        $this->name = $name;
         $this->price = $price;
    }
    public function priceAsCurrency()
    {
            $priceAsCurrency = $this->price /100;
            return $priceAsCurrency;   
    }
}

$product = new Product;
print $product->name . '<br>';
print $product->price;