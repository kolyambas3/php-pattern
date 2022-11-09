<?php

namespace App\Config;

class Image
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __clone()
    {
        $this->name = "Copy of {$this->name}";
    }
}