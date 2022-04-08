<?php


class User {
    // Create properties
    
    public $name;
    public $username; 
    public $followerCount;

}

$objectPhumlani = new User();

$objectPhumlani->name = "Phumlani";
$objectPhumlani->username = "Mhlunguep";
$objectPhumlani->followerCount = 1300;

print_r($objectPhumlani);
var_dump($objectPhumlani);

