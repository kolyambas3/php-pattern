<?php

namespace App\Config;

use App\Singleton\Singleton;

class Loggin extends Singleton
{
    private $fileHandle;

    public function writeLog(string $message): void
    {
        $this->fileHandle = fopen('php://stdout', 'w');
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "$date: $message\n");
    }

    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}