<?php

namespace App\Config;

use App\Singleton\Singleton;
use PDO;

class Database extends Singleton
{
    /**
     * @return array
     */
    public function getConnection(): array
    {
        return PDO::getAvailableDrivers();
    }

    /**
     * @return void
     */
    public function getDrivers(): void
    {
        $database = self::getInstance();
        $database->getConnection();
    }
}