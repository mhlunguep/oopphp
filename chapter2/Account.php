<?php

class Account 
{
    public $accoountNumber;
    public $balance;

    // public __construct($accoountNumber, $balance){
    //     $this->accoountNumber = $accoountNumber;
    //     $this->balance = $balance;
    // }

    public function deposit($amount){
        echo "Depositing " . $amount .'<br>';
    }
    public function withdraw($amount){
        echo "Withdrawing " . $amount .'<br>';
    }

    public function getBalance(){
        return $this->balance;
    }
}