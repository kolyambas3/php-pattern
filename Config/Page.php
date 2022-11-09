<?php

namespace App\Config;

class Page
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function __clone()
    {
        $this->title = "Copy of {$this->title}";
    }
}