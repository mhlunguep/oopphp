<?php
namespace Database\MySQL;

class Connection
{
    private string $databaseUrl = 'http://mysql/phpmyadmin/index.php?route=/&route=%2F';

    public function getDatabaseUrl(): string
    {
        return $this->databaseUrl;
    }
    
}
