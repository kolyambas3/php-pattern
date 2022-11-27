<?php

namespace App\Interfaces;

interface Engine {
    public function type(): string;

    public function volume(): string;
}