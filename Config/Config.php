<?php

namespace App\Config;

use App\Singleton\Singleton;

class Config extends Singleton
{
    private $hashdata = [];

    /**
     * @param string $key
     * @return string
     */
    public function getValue(string $key): string
    {
        return $this->hashdata[$key];
    }

    /**
     * @param string $key
     * @param string $value
     * @return void
     */
    public function setValue(string $key, string $value): void
    {
        $this->hashdata[$key] = $value;
    }
}