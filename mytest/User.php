<?php

require_once 'logger.php'; 

class User 
{
    use Logger;

    public function __construct($user)
    {
        $this->log("New User, $user created");
    }
}