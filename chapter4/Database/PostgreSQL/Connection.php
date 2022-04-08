<?php

namespace Database\PostgreSQL;

class Connection
{
    private string $databaseUrl = 'http://postgresql/phpmyadmin/index.php?route=/&route=%2F';

    public function getDatabaseUrl(): string
    {
        return $this->databaseUrl;
    }
}