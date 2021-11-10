<?php

class Package extends BaseProduct
{  
    public array $products;

    public function getPrice()
    {
        $price =+ $products->$price;
    }
    public function __construct(array $products) {
    $this->products = $products;
    } 
}
 