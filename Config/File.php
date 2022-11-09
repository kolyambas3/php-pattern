<?php

namespace App\Config;

class File
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __clone(): void
    {
        $this->name = "Copy of {$this->name}";
    }
}