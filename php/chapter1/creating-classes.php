<?php


class Product
{
    public $name = 'soap';
    public $price; 

    public function __construct($name= 'Car', $price= 100)
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

// $product = new Product(); 
// var_dump($product);
// $anotherProduct = new Product;
// var_dump($anotherProduct);
// $soapObject = new Product();
// echo($soapObject->name). '<br>';
// $soapObject->name="toothpaste";
// echo($soapObject->name). '<br>';
// var_dump($soapObject). '<br>';
// $soapObject->price = 550;
// var_dump($soapObject->price);
// $priceAsCurrency = $soapObject->priceAsCurrency();
// var_dump($priceAsCurrency);
// $soapObject2 = new Product();
// $soapObject2->price = 670;
// $priceAsCurrency = $soapObject2->priceAsCurrency();
// var_dump($priceAsCurrency);
$product = new Product(price: 4500);

print $product->name . '<br>';
print $product->price;