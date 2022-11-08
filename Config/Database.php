<?php

namespace App\Config;

use App\Singleton\Singleton;
use PDO;

class Database extends Singleton
{
    public function getConnection(): array
    {
        return PDO::getAvailableDrivers();
    }

    public function getDrivers(): array
    {
        $database = self::getInstance();
        $database->getConnection();
    }
}