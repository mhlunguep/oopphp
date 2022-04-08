<?php 
// Create a Basket class
class Basket {
    // Add itemsTotal and ShippingCost public properties
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal() {

        $subTotal = ($this->itemsTotal + $this->shippingCost) - $this->discount;
        // Set a discount of 30

        return $subTotal;
    }
}
// Instantiate a Basket using the new keyword
$objectBasket = new Basket();

// Set values for both properties
$objectBasket->itemsTotal = 489;
$objectBasket->shippingCost = 59;
$objectBasket->discount = 30;


$subTotal = $objectBasket->calculateSubTotal();
var_dump($subTotal);