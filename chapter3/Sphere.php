<?php

require_once 'ThreeDimensionalShape.php';

class Sphere extends ThreeDimensionalShape
{
    /**
     *Calculate Sphere Volume [V=4/3πr3]
     * 
    */
    public function volume(): float
    {
        return (4/3) * pow($this->dimensions['radius'], 3);
    }
}