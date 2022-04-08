<?php

class Connection
{
    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public function getCount()
    {
        return self::$count;
    }

    public function __destruct() 
    {
        self::$count--;
    }

}