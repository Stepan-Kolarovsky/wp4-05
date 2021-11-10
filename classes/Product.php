<?php

class Product extends BaseProduct
{
    public int $price;

    public function getPrice(): int
    {
        return $this->price;
    }
}
