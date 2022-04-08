<?php

require_once 'DataModel.php';

class Product extends DataModel
{
    private string $name;
    private float $price;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    { 
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice() 
    { 
        return $this->price;
    }
}