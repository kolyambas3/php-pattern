<?php

namespace App\Config;

use App\Singleton\Singleton;

class Config extends Singleton
{
    private $hashdata = [];

    public function getValue(string $key): string
    {
        return $this->hashdata[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashdata[$key] = $value;
    }
}