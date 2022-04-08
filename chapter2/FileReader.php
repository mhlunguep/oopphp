<?php

class FileReader
{
    // public $data = 'Some random public text data';
    protected $data2 = 'This data was protected but I used a public method to access it';
    private $data3 = 'Some random private text data';

    public function getData(){
        return $this->data2;
    }
}